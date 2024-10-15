<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Services\LogService;
use App\Services\AuthService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Notifications\EmailCodeNotification;
use App\Repositories\EmailCodeMessageRepository;
use App\Http\Requests\UserUpdateRequest;
use Carbon\Carbon;

class UserController extends Controller
{
    private $authService;
    private $emailCodeMessageRepo;

    /**
     * @var LogService
     */
    private $logService;

    public function __construct(AuthService $authService, EmailCodeMessageRepository $emailCodeMessageRepo, LogService $logService)
    {
        $this->authService = $authService;
        $this->emailCodeMessageRepo = $emailCodeMessageRepo;
        $this->logService = $logService;
    }

    public function index(Request $request, $user_id)
    {
        $user = $this->authService->userRepository->getById($request->user()->id, [
            'id', 'name', 'email', 'phone', 'birthdate', 'email_verified_at', 'last_name'
        ]);

        if ($user->birthdate) {
            $user->birthdate = Carbon::parse($user->birthdate);
        }

        return view('pages.personal-account', compact('user'));
    }

    public function update(UserUpdateRequest $request, $user_id)
    {
        $day = $request->birthdate_parts['day'] ?? '1';
        $month = $request->birthdate_parts['month'] ?? '01';
        $year = $request->birthdate_parts['year'] ?? '2024';
        $data = $request->validated();
        $data['birthdate'] = Carbon::parse($day . '-' . $month . '-' . $year)->format('Y-m-d H:i:s');

        $request->user()->update($data);

        return redirect()->route('account.index', $request->user()->id);
    }

    /**
     * 
     * @param Request $request
     */
    public function register(Request $request)
    {
        try {
            try {
                $rules = [
                    'name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'phone' => 'required|string|max:20|unique:users,phone',
                    'email' => 'required|email|max:255|unique:users,email',
                    // 'city' => 'required|string|max:255',
                    'password' => [
                        'required',
                        'string',
                        'min:' . 8,
                        'max:255',
                    ],
                ];
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Validation failed',
                        'errors' => $validator->errors()
                    ], 422);
                }
        
                $userId = null;
                $user = $this->authService->register($request->only(['name', 'last_name', 'phone', 'email', 'password']));
                if ($user) {
                    $userId = $user->id;
                    $user->roles()->attach(3);
                    $this->authService->loginByUserId($userId);
                }
        
                return response()->json([
                        'status' => 'success',
                        'user_id' => $userId
                    ]);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => 'error',
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ],422);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ], 500);
        }
    }

    public function sendCodeEmail(Request $request)
    {
        $email = $request->email;
        $codeSended = false;
        $user = $this->authService->userRepository->firstByEmail($email, $fields = ['id', 'name']);
        if ($user) {
            $code = $this->authService->smsServiceGenerateRandomCode();
            $message = $this->authService->getSmsServiceMessage($code);
            $result = $this->emailCodeMessageRepo->set($email, $message, $code);
            if ($result) {
                $data = [
                    'name' => $user->name,
                    'code' => $code
                ];
                $codeSended = Mail::to('qwe@qwe.kz')->send(new EmailCodeNotification($data));
            };
        }

        if ($codeSended) {
            return response()->json([
                'status' => 'success',
                'user_id' => $user->id,
                'message' => 'Код успешно отправлен на: ' . $email
            ]);
        } elseif(!$codeSended) {
            return response()->json([
                'status' => 'warning',
                'message' => __('site.user.Not found')
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Не удалось отправить код. Пожалуйста, попробуйте позже.'
            ], 500);
        }
    }

    public function confirmCode(Request $request)
    {
        $email = $request->input('email');
        $code = $request->input('code');
        $smsSended = true;
        $isConfirm = DB::table('email_code_messages')
            ->where('email', $email)
            ->where('code', $code)
            ->exists();

        if ($isConfirm) {
            return response()->json([
                'status' => 'success',
                'message' => 'SMS отправлено успешно.'
            ]);
        } elseif(!$isConfirm) {
            return response()->json([
                'status' => 'not_found',
                'message' => 'Не верный код.'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Ошибка отпавки смс.'
            ], 500);
        }
    }

    /**
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authCheck(Request $request)
    {
        try {
            $userName = null;
            $isAuth = $this->authService->check();
            $personalAccountUrl = null;
            if ($isAuth) {
                $user = $this->authService->user();
                $userName = $user->name;
                $personalAccountUrl = route('account.index', ['user_id' => $user->id]);
            }
            return response()->json([
                'status' => 'success',
                'is_auth' => $isAuth,
                'user_name' => $userName,
                'personal_account_url' => $personalAccountUrl
            ]);
        } catch (\Exception $e) {
            $this->logService
                ->log(__METHOD__, 'authCheck', "message: {$e->getMessage()}")
                ->write();

            return response()->json([
                'status' => 'error',
                'message' => 'Internal server error'
            ]);
        }
    }

    /**
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function personalAccountLogout(Request $request)
    {
        try {
            $this->authService->logout();
            return response()->json([
                'status' => 'success',
                'message' => 'Выход из аккаунта успешно'
            ]);
        } catch (\Exception $e) {
            $this->logService
                ->log(__METHOD__, 'authCheck', "message: {$e->getMessage()}")
                ->write();
            
            return response()->json([
                'status' => 'error',
                'message' => 'Internal server error'
            ], 500);    
        }
    }
}

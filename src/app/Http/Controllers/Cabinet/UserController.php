<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Notifications\EmailCodeNotification;
use App\Repositories\EmailCodeMessageRepository;

class UserController extends Controller
{
    private $authService;
    private $emailCodeMessageRepo;

    public function __construct(AuthService $authService, EmailCodeMessageRepository $emailCodeMessageRepo)
    {
        $this->authService = $authService;
        $this->emailCodeMessageRepo = $emailCodeMessageRepo;
    }

    public function index(Request $request)
    {
        $userId = $request->user_id;
        $user = $this->authService->userRepository->getById($userId, [
            'id', 'name', 'email', 'phone', 'email_verified_at', 'last_name'
        ]);

        return view('pages.personal-account', compact('user'));
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
                    'city' => 'required|string|max:255',
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
        
                $user = $this->authService->register($request->only(['name', 'last_name', 'phone', 'email', 'city','password']));
                if ($user) {
                    $user->roles()->attach(3);
                }
        
                return response()->json([
                        'status' => 'success',
                        'user_id' => $user->id
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
                'message' => 'Код отправлен успешно отправлен на: ' . $email
            ]);
        } elseif(!$smsSended) {
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
                'message' => 'Не верный смс код.'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Ошибка отпавки смс.'
            ], 500);
        }
    }
}

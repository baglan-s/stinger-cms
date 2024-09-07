<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index(Request $request)
    {
        $userId = $request->user_id;
        $user = $this->authService->userRepository->getById($userId, [
            'id', 'name', 'email', 'phone', 'email_verified_at', 'last_name'
        ]);

        return view('pages.personal-account', compact('user'));
    }

    public function sendCodeEmail(Request $request)
    {
        $email = $request->email;
        $codeSended = false;
        $user = $this->authService->userRepository->firstByEmail($email, $fields = ['id']);
        if ($user) {
            $otp = $this->authService->smsServiceGenerateRandomCode();
            $message = $this->authService->getSmsServiceMessage($otp);
            $response = true;
            if ($response) {
                $codeSended = true;
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
}

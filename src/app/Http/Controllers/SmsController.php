<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\AuthService;

class SmsController extends Controller
{
    private $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function sendSms(Request $request)
    {
        $smsSended = false;
        $phone = $request->input('phone');
        $phone = preg_replace('/[^\+\d]/', '', $phone);
        $user = User::where('phone', $phone)->exists();
        if ($user) {
            $otp = $this->authService->smsServiceGenerateRandomCode();
            $message = $this->authService->getSmsServiceMessage($otp);
            $smsMessage = $this->authService->setSmsServiceMessage($phone, $message, $otp);
            $response = $this->authService->smsServiceSend($smsMessage->phone, $smsMessage->text);
            if ($response) {
                $smsSended = true;
            };
        }

        if ($smsSended) {
            return response()->json([
                'status' => 'success',
                'message' => 'SMS отправлено успешно.'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Не удалось отправить SMS. Пожалуйста, попробуйте позже.'
            ], 500);
        }
    }

    public function confirmSms(Request $request)
    {
        $phone = $request->input('code');
        $code = $request->input('phone');
        $smsSended = true;

        if ($smsSended) {
            return response()->json([
                'status' => 'success',
                'message' => 'SMS отправлено успешно.'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Не удалось отправить SMS. Пожалуйста, попробуйте позже.'
            ], 500);
        }
    }

}

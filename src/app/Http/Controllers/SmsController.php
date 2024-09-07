<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\DB;

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
        $user = User::select('id')
            ->where('phone', $phone)
            ->first();
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
                'user_id' => $user->id,
                'message' => 'SMS отправлено успешно.'
            ]);
        } elseif(!$smsSended) {
            return response()->json([
                'status' => 'warning',
                'message' => __('site.user.Not found')
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
        $phone = ltrim(remove_phone_mask($request->input('phone')));
        $code = $request->input('code');
        $smsSended = true;
        $isConfirm = DB::table('sms_messages')
            ->where('phone', $phone)
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

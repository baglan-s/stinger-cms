<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Integration\SmsService;

class SmsController extends Controller
{
    private $smsService;
    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }

    public function sendSms(Request $request)
    {
        $phone = $request->input('phone');
        $message = 'Hello';
        $result = $this->smsService->send($phone, $message);

        if ($result->isSuccess()) {
            // Если отправка SMS успешна, возвращаем ответ
            return response()->json([
                'status' => 'success',
                'message' => 'SMS отправлено успешно.'
            ]);
        } else {
            // Если возникла ошибка при отправке
            return response()->json([
                'status' => 'error',
                'message' => 'Не удалось отправить SMS. Пожалуйста, попробуйте позже.'
            ], 500);
        }
    }

}

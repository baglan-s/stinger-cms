<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackSend;
use Illuminate\Http\Request;
use App\Services\LogService;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function __construct(
        protected LogService $logService
    ) {}

    public function sendFeedback(Request $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            $message = $request->message;
            Mail::to($request->user())->send(new FeedbackSend($name, $email, $message));
            
            return response()->json([
                'status' => 'success',
                'message' => 'Заявка успешно отправлена'
            ], 200);
        } catch (\Exception $e) {
            $this->logService
                ->log('Send feedback error', __METHOD__, $e)
                ->write();

            return response()->json([
                'status' => 'error',
                'message' => 'Internal server error'
            ], 500);
        }
    }
}

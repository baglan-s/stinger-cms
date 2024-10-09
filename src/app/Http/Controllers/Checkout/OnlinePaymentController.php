<?php

namespace App\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Drivers\Contracts\OnlinePaymentInterface;

class OnlinePaymentController extends Controller
{
    protected PaymentFactory $paymentFactory;

    public function __construct(PaymentFactory $paymentFactory)
    {
        $this->paymentFactory = $paymentFactory;
    }

    public function processPayment(Request $request)
    {
        $order = Order::find(123);
        $paymentType = $request->get('payment_type', 'tiptop');
        $payment = $this->paymentFactory->make($paymentType);
        if ($payment instanceof OnlinePaymentInterface) {
            dd(123);
        }
    }
}

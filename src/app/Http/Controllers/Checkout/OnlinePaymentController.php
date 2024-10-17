<?php

namespace App\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use App\Models\Catalog\Order;
use App\Http\Controllers\Controller;
use App\Drivers\Contracts\OnlinePaymentInterface;
use App\Services\Integration\Payment\PaymentFactory;

class OnlinePaymentController extends Controller
{
    protected PaymentFactory $paymentFactory;

    public function __construct(PaymentFactory $paymentFactory)
    {
        $this->paymentFactory = $paymentFactory;
    }

    public function index()
    {
        return view('pages.tests.tip-top-pay');
    }

    public function processPayment(Request $request)
    {
        $order = Order::find(1);
        $paymentType = $request->get('payment_type', 'tip-top-pay');
        $payment = $this->paymentFactory->make($paymentType);
        if ($payment instanceof OnlinePaymentInterface) {
            $payment->pay($order);
        } else {
            return;
        }
    }
}

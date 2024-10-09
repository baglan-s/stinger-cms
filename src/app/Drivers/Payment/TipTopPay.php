<?php

namespace App\Drivers\Payment;

use App\Drivers\Contracts\OnlinePaymentInterface;

class TipTopPay implements OnlinePaymentInterface
{
    public function pay(Order $order)
    {
        return "Payment made using TipTopPay for order #" . $order->id;
    }
}
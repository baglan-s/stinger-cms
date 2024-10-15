<?php

namespace App\Drivers\Payment;

use App\Models\Catalog\Order;
use App\Drivers\Contracts\OnlinePaymentInterface;

class TipTopPay implements OnlinePaymentInterface
{
    public function pay($order)
    {
        return "Payment made using TipTopPay for order #" . $order->id;
    }
}
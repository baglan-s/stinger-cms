<?php

namespace App\Drivers\Payment;

use App\Models\Catalog\Order;
use App\Drivers\Contracts\OnlinePaymentInterface;

class MegaPay implements OnlinePaymentInterface
{
    public function pay($order)
    {
        return "Payment made using MegaPay for order #" . $order->id;
    }
}
<?php

namespace App\Drivers\Contracts;

interface OnlinePaymentInterface
{
    public function pay(Order $order);
}
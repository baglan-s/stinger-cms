<?php

namespace App\Services\Integration\Payment;

use App\Services\Service;
use Illuminate\Support\Facades\App;
use App\Drivers\Contracts\OnlinePaymentInterface;

class PaymentFactory
{
    /**
     * Получение экземпляра платежной системы по указанному типу.
     *
     * @param string $type Тип платежной системы (например, 'tiptop', 'megapay').
     * @return PaymentInterface
     */
    public function make(string $type): OnlinePaymentInterface
    {
        // Использование контейнера чтобы динамически сделать объект
        return App::make($type);
    }
}
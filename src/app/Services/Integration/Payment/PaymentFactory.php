<?php

namespace App\Services\Integration\Payment;

use App\Services\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use App\Drivers\Contracts\OnlinePaymentInterface;

class PaymentFactory
{
    /**
     * Получение экземпляра платежной системы по указанному типу.
     *
     * @param string $type Тип платежной системы (например, 'tip-top-pay', 'mega-pay') важно задавать алиасы сущностям платежных систем, через знак '-' (дефис) разделяя имя самого класса, например tip-top-pay.
     * @return OnlinePaymentInterface
     */
    public function make(string $type)
    {
        $namespace = 'App\\Drivers\\Payment';
        $fullClassName = (string)Str::of($namespace)
                        ->rtrim('\\')
                        ->append('\\', Str::studly($type));
                        
        // Использование контейнера чтобы динамически сделать объект
        return class_exists($fullClassName) ? App::make($fullClassName) : null;
    }
}
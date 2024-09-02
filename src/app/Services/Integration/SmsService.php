<?php

namespace App\Services\Integration;

use App\Services\Service;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;
use Illuminate\Contracts\Container\BindingResolutionException;

class SmsService extends Service
{
    /**
     * 
     * @return string|int 
     * @throws BindingResolutionException 
     * @throws NotFoundExceptionInterface 
     * @throws ContainerExceptionInterface 
     */
    public function generateRandomCode()
    {
        return rand(1000, 9999);
    }
}
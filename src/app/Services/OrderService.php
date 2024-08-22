<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\OrderRepository;

class OrderService extends Service
{
    public function __construct(
        protected OrderRepository $repository
    ) {}

}
<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\OrderRepository;
use App\Models\Catalog\Order;
use App\Services\Integration\OneCApiService;
use App\Helpers\Adapters\OrderAdapter;

class OrderService extends Service
{
    public function __construct(
        protected OrderRepository $repository,
        protected OneCApiService $oneCApiService
    ) {}

    public function sendOrderToOneC(Order $order): array
    {
        return $this->oneCApiService->createOrder(
            OrderAdapter::adaptOneCOrder($order)
        );
    }
}
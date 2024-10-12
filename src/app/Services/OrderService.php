<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\OrderRepository;
use App\Models\Catalog\Order;
use App\Models\Catalog\OrderItem;
use App\Services\Integration\OneCApiService;
use App\Services\LogService;
use App\Helpers\Adapters\OrderAdapter;
use Illuminate\Support\Facades\DB;

class OrderService extends Service
{
    public function __construct(
        protected OrderRepository $repository,
        protected OneCApiService $oneCApiService,
        protected LogService $logService
    ) {}

    public function sendOrderToOneC(Order $order): array
    {
        return $this->oneCApiService->createOrder(
            OrderAdapter::adaptOneCOrder($order)
        );
    }

    public function createOrder(array $order): Order
    {
        DB::beginTransaction();

        try {
            $products = $order['products'];
            unset($order['products']);
            $order = $this->repository->create($order);
        
            foreach ($products as $product) {
                if ($product->isAvailable) {
                    $order->items()->create([
                        'product_id' => $product->id,
                        'quantity' => $product->quantity,
                        'cost' => $product->getPrice(),
                        'discount' => $product->getDiscount(),
                        'total' => $product->totalPrice,
                    ]);

                    $stock = $product->stocks()
                        ->where('store_id', $order->store_id)
                        ->first();

                    if ($stock) {
                        $stock->decrement('available', $product->quantity <= $stock->available ? $product->quantity: $stock->available);
                    }
                }
            }

            $this->sendOrderToOneC($order);
            DB::commit();


            return $order;
        } catch (\Exception $e) {
            DB::rollBack();
            $this->logService->log('Error creating order', 'order', $e)->write();

            throw $e;
        }
    }

    public function createOrderItem(Order $order, array $orderItem): OrderItem
    {
        return $order->items()->create($orderItem);
    }
}
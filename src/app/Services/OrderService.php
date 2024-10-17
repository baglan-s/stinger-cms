<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\OrderRepository;
use App\Repositories\OrderStatusRepository;
use App\Repositories\LanguageRepository;
use App\Models\Catalog\Order;
use App\Models\Catalog\OrderItem;
use App\Models\Catalog\OrderStatus;
use App\Services\Integration\OneCApiService;
use App\Services\LogService;
use App\Helpers\Adapters\OrderAdapter;
use App\Helpers\Adapters\OrderStatusAdapter;
use Illuminate\Support\Facades\DB;

class OrderService extends Service
{
    public function __construct(
        protected OrderRepository $repository,
        protected OrderStatusRepository $orderStatusRepository,
        protected LanguageRepository $languageRepository,
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

    public function updateOrderStatusOneC(Order $order): array
    {
        return $this->oneCApiService->updateOrderStatus(
            $order->id,
            $order->status->id_1c
        );
    }

    public function createOrderItem(Order $order, array $orderItem): OrderItem
    {
        return $order->items()->create($orderItem);
    }

    /**
     * Takes types from 1C and creates or updates it in DB.
     *
     * @param array $statuses
     * @return void
     */
    public function syncStatusesWithOneC(array $statuses)
    {
        try {
            $dbStatuses = $this->orderStatusRepository->all();
            $synchronized = 0;
            $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));

            foreach ($statuses as $status) {
                $existedStatus = $dbStatuses->where('guid', $status['guid'])->first();

                if (!$existedStatus) {
                    $existedStatus = $this->orderStatusRepository->create(OrderStatusAdapter::adaptOneCOrderStatus($status));
                    $existedStatus->translations()->create(
                        OrderStatusAdapter::adaptOneCOrderStatusTranslation($status, $defaultLanguage->id)
                    );
                    $dbStatuses->push($existedStatus);
                } else {
                    $existedStatus->update(OrderStatusAdapter::adaptOneCOrderStatus($status));
                    $existedStatus->translations()->where('language_id', $defaultLanguage->id)->update(
                        OrderStatusAdapter::adaptOneCOrderStatusTranslation($status, $defaultLanguage->id)
                    );
                }

                $synchronized++;
            }

            $this->logService
                ->log('OrderStatus synchronization', '1c', "OrderStatuses synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('OrderStatus synchronization error', '1c', $e)
                ->write();
        }
    }

    public function getStatusByCode(string $code): OrderStatus|null
    {
        return $this->orderStatusRepository->model()
            ->where('code', $code)
            ->first();
    }

    public function getStatusByGuid(string $guid): OrderStatus|null
    {
        return $this->orderStatusRepository->model()
            ->where('guid', $guid)
            ->first();
    }
}
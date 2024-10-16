<?php

namespace App\Services;

use App\Services\Service;
use App\Services\OrderService;
use App\Services\LogService;
use Illuminate\Support\Facades\Cookie;
use App\Repositories\ProductRepository;
use App\Models\Catalog\Product;
use App\Models\Catalog\City;
use App\Models\Catalog\Store;
use App\Models\Catalog\DeliveryAddress;

class CartService extends Service
{
    public int $storeTime = 86400;

    protected $products;

    protected $stores;

    private City $currentCity;

    public DeliveryAddress $deliveryAddress;

    public Store|null $selectedStore = null;

    public bool $hasReceiver = false;

    public string $notificationMethod = 'sms';

    public string|null $receiverName = null;

    public string|null $receiverLastName = null;

    public string|null $receiverPhone = null;

    public string|null $receiverEmail = null;

    public string|null $comment = null;

    private string $shippingMethod;

    private int $paymentTypeId;

    public function __construct(
        protected OrderService $orderService,
        protected LogService $logService,
        protected ProductRepository $productRepository,
        private array $items = [],
    ) {
        // $this->setShippingMethod(Cookie::get('ct_spg_mtd', 'pickup'));
        $this->setShippingMethod(session()->get('shippingMethod', 'pickup'));
        $this->setNotificationMethod(session()->get('notificationMethod', 'sms'));
        $this->currentCity = City::find(Cookie::get('city_id')) ?? City::first();
        $this->setItems();
        $this->setStores();
        $firstStore = $this->stores[0] ?? null;
        $this->setStore(Store::find(session()->get('selectedStore')) ?? $firstStore);
        $this->setProducts();

        // if (Cookie::get('ct_receiver')) {
        if (session()->has('receiver')) {
            // $receiver = json_decode(Cookie::get('ct_receiver'), true);
            $receiver = json_decode(session()->get('receiver'), true);
            $this->setReveiverData(
                $receiver['name'] ?? '-',
                $receiver['lastName'] ?? '-',
                $receiver['phone'] ?? '-',
                $receiver['email'] ?? null,
                session()->get('cartComment', null),
                // Cookie::get('ct_comment', null),
                false
            );
            $this->hasReceiver = true;
        }

        if ($deliveryAddressId = session()->get('deliveryAddress')) {
            $this->deliveryAddress = DeliveryAddress::find($deliveryAddressId);
        }

        // $this->paymentTypeId = (int)Cookie::get('ct_pay_mtd', null);
        $this->paymentTypeId = (int)session()->get('paymentTypeId', null);
    }

    public function add(int $productId, int $quantity)
    {
        if (!isset($this->items[$productId])) {
            $this->items[$productId] = $quantity;
            $this->setProducts();
        } else {
            $this->items[$productId] += $quantity;
        }

        Cookie::queue('cart', json_encode($this->items), $this->storeTime);
    }

    public function remove(int $productId, int $quantity)
    {
        if (isset($this->items[$productId]) && $this->items[$productId] >= $quantity) {
            $this->items[$productId] -= $quantity;

            if ($this->items[$productId] <= 0) {
                unset($this->items[$productId]);
                $this->setProducts();
            }
        }
        
        Cookie::queue('cart', json_encode($this->items), $this->storeTime);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items = []): void
    {
        $this->items = !empty($items) 
            ? $items 
            : json_decode(Cookie::get('cart', json_encode([])), true);
    }

    public function clear()
    {
        Cookie::queue('cart', json_encode([]), -1);
        $this->items = [];
        $this->setProducts();
    }

    public function getProducts()
    {
        return $this->products->map(function ($product) use (&$data) {
            $product->quantity = $this->items[$product->id] ?? 0;
            $product->totalPrice = $product->getPrice() * $product->quantity;
            $product->totalOldPrice = $product->getOldPrice() * $product->quantity;
            $product->isAvailable = $this->isProductAvailable($product);

            $product->availableQuantity = $product->isAvailable ? $product->quantity : 0;
            $product->availableTotalPrice = $product->isAvailable ? $product->totalPrice : 0;
            $product->availableTotalOldPrice = $product->isAvailable ? $product->totalOldPrice : 0;

            return $product;
        });
    }

    public function getStores()
    {
        return $this->stores;
    }

    public function getCurrentCity()
    {
        return $this->currentCity;
    }

    public function getTotalPrice()
    {
        return $this->getProducts()->sum('totalPrice');
    }

    public function itemsCount()
    {
        return count($this->items);
    }

    public function setProducts()
    {
        $this->products = empty($this->items) 
            ? collect([]) 
            : $this->productRepository->model()
                ->whereIn('id', array_keys($this->items))
                ->with(['stocks', 'stocks.store', 'stocks.store.city', 'prices'])
                ->get();
    }

    public function setStores()
    {
        $this->stores = Store::where('city_id', $this->currentCity?->id)
            ->orWhere('is_distributor', true)
            ->whereHas('stocks', function ($query) {
                $query->where('available', '>', 0)
                    ->whereIn('product_id', array_keys($this->items));
            })
            ->with('stocks')
            ->get();
    }

    public function setShippingMethod(string $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        // Cookie::queue(Cookie::make('ct_spg_mtd', $this->shippingMethod, $this->storeTime));
        session()->put('shippingMethod', $this->shippingMethod);
    }

    public function getShippingMethod(): string
    {
        return $this->shippingMethod;
    }

    public function setPaymentTypeId(int $paymentTypeId): void
    {
        $this->paymentTypeId = $paymentTypeId;
        session()->put('paymentTypeId', $this->paymentTypeId);
        // Cookie::queue(Cookie::make('ct_pay_mtd', $paymentTypeId, $this->storeTime));
    }

    public function getPaymentTypeId(): int
    {
        return $this->paymentTypeId;
    }

    public function setNotificationMethod(string $notificationMethod): void
    {
        $this->notificationMethod = $notificationMethod;
        session()->put('notificationMethod', $notificationMethod);
        // Cookie::queue(Cookie::make('ct_ntf_mtd', $notificationMethod, $this->storeTime));
    }

    public function getNotificationMethod(): string
    {
        return $this->notificationMethod;
    }

    public function setDeliveryAddress(DeliveryAddress $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        // Cookie::queue(Cookie::make('ct_dlvr_addr', $deliveryAddress->id, $this->storeTime));
        session()->put('deliveryAddress', $deliveryAddress->id);
    }

    public function getDeliveryAddress(): DeliveryAddress|null
    {
        return $this->deliveryAddress;
    }

    private function isProductAvailable(Product $product)
    {
        if ($this->shippingMethod === 'delivery') {
            return $this->currentCity?->has_delivery && $product->stocks->filter(function ($stock) {
                return $stock->store->city_id === $this->currentCity?->id && $stock->available > 0;
            })->isNotEmpty();
        }

        return $product->stocks->filter(function ($stock) {
            return $stock->store->id === $this->selectedStore?->id
                && $stock->available > 0;
        })->isNotEmpty();
    }

    public function setStore(Store|null $store)
    {
        $this->selectedStore = $store;
        session()->put('selectedStore',  $store?->id);
        // Cookie::queue(Cookie::make('ct_store', $store?->id, $this->storeTime));
    }

    public function setReveiverData($name, $lastName, $phone, $email = null, $comment = null, $store = true)
    {
        $this->receiverName = $name;
        $this->receiverLastName = $lastName;
        $this->receiverPhone = $phone;
        $this->receiverEmail = $email;
        $this->comment = $comment;

        if ($store) {
            session()->put('receiver', json_encode([
                'name' => $name,
                'lastName' => $lastName,
                'phone' => $phone,
                'email' => $email,
            ]),);
            // Cookie::queue(Cookie::make('ct_comment', $comment, $this->storeTime));
            session()->put('cartComment', $comment);
        }
    }

    public function setComment(string|null $comment)
    {
        $this->comment = $comment;
        session()->put('cartComment', $this->comment);
        // Cookie::queue(Cookie::make('ct_comment', $comment, $this->storeTime));
    }

    public function setHasReceiver(bool $hasReceiver)
    {
        $this->hasReceiver = $hasReceiver;

        if (!$hasReceiver) {
            // Cookie::queue(Cookie::make('ct_receiver', null, -1));
            session()->put('receiver', $hasReceiver);
        }
    }

    public function createOrder()
    {
        try {
            $receiverData = [];
            $products = $this->getProducts();
            $orderData = [
                'user_id' => auth()->user()?->id,
                'order_status_id' => $this->orderService->getStatusByCode(config('app.order.status_new'))?->id,
                'is_paid' => false,
                'notification_method' => $this->notificationMethod,
                'comment' => $this->comment,
                'store_id' => $this->shippingMethod === 'pickup' 
                    ? $this->selectedStore?->id 
                    : $products[0]?->stocks->filter(function ($stock) {
                        return $stock->store->city_id == Cookie::get('city_id');
                    })->sortByDesc('available')->first()?->store_id,
                'products' => $products
            ];

            if ($this->hasReceiver) {
                $receiverData = [
                    'receiver_name' => $this->receiverName,
                    'receiver_lastname' => $this->receiverLastName,
                    'receiver_phone' => $this->receiverPhone,
                    'receiver_email' => $this->receiverEmail,
                    'has_receiver' => true
                ];
            }

            if ($this->shippingMethod === 'delivery') {
                $orderData['delivery_address_id'] = $this->deliveryAddress->id;
                $orderData['is_delivery'] = true;
                $orderData['delivery_company'] = '';
            }

            $order = $this->orderService->createOrder(array_merge($orderData, $receiverData));

            if (!$order) {
                throw new \Exception('Error creating order');
            }
            
            foreach ($order->items as $orderItem) {
                $this->remove($orderItem->product_id, $orderItem->quantity);
            }

            $this->clearCookieData();

            return $order;
        } catch (\Exception $e) {
            $this->logService->log('Error creating order', 'order', $e)->write();
            throw $e;
        }
    }

    public function clearCookieData()
    {
        // Cookie::queue('ct_spg_mtd', json_encode([]), -1);
        // Cookie::queue('ct_store', json_encode([]), -1);
        // Cookie::queue('ct_receiver', json_encode([]), -1);
        // Cookie::queue('ct_comment', '', -1);
        // Cookie::queue('ct_dlvr_addr', '', -1);
        // Cookie::queue('ct_ntf_mtd', '', -1);
        // Cookie::queue('ct_pay_mtd', '', -1);
        session()->forget([
            'shippingMethod',
            'paymentTypeId',
            'notificationMethod',
            'deliveryAddress',
            'selectedStore',
            'cartComment',
            'receiver',
        ]);
    }
}
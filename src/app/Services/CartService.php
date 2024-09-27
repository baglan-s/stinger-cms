<?php

namespace App\Services;

use App\Services\Service;
use Illuminate\Support\Facades\Cookie;
use App\Repositories\ProductRepository;

class CartService extends Service
{
    public int $storeTime = 86400;

    protected $products;

    public function __construct(
        protected ProductRepository $productRepository,
        private array $items = [],
    ) {
        $this->setItems();
        $this->setProducts();
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
        return $this->products->map(function ($product) {
            $product->quantity = $this->items[$product->id] ?? 0;
            $product->totalPrice = $product->getPrice() * $product->quantity;
            $product->totalOldPrice = $product->getOldPrice() * $product->quantity;

            return $product;
        });
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
                ->get();
    }
}
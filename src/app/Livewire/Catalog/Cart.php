<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;
use App\Services\CartService;
use App\Models\Catalog\Store;
use Illuminate\Support\Facades\Cookie;

class Cart extends Component
{
    private CartService $cartService;

    public bool $hasProduct = false;

    public string $shippingMethod = 'pickup';

    public int $productCount = 0;

    public int $totalPrice = 0;

    public array $cartItems;

    public $products;

    public $stores;

    public Store|null $selectedStore;

    public function mount()
    {
        $this->shippingMethod = $this->cartService->getShippingMethod();
        $this->setCartData();
        
        $storesCollection = collect($this->stores);
        $this->selectedStore = $this->cartService->selectedStore ?? $storesCollection->first();
    }

    public function __construct()
    {
        $this->cartService = app(CartService::class);
    }

    public function render()
    {
        return view('livewire.catalog.cart');
    }

    public function addToCart(int $productId, int $quantity = 1)
    {
        $this->cartService->add($productId, $quantity);
        $this->setCartData();
        $this->dispatch('cartIncremented');
    }

    public function removeFromCart(int $productId, int $quantity = 1)
    {
        $this->cartService->remove($productId, $quantity);
        $this->setCartData();
        $this->dispatch('cartDecremented');
    }

    public function setCartData()
    {
        $this->cartItems = $this->cartService->getItems();
        $this->productCount = $this->cartService->itemsCount();
        $this->hasProduct = $this->productCount > 0;
        $this->totalPrice = $this->cartService->getTotalPrice();
        $this->stores = $this->cartService->getStores();
        $this->products = $this->cartService->getProducts();
    }

    public function clearCart()
    {
        $this->cartService->clear();
        $this->setCartData();
        $this->dispatch('cartCleared');
    }

    public function setShippingMethod(string $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        $this->cartService->setShippingMethod($this->shippingMethod);
        $this->setCartData();
    }

    public function selectStore(Store|null $store)
    {
        $this->selectedStore = $store;
        $this->cartService->setStore($store);
        $this->setCartData();
    }
}

<?php

namespace App\Livewire\Checkout;

use Livewire\Component;
use App\Services\ProductService;
use App\Services\CartService;

class Cart extends Component
{
    private CartService $cartService;

    public bool $hasProduct = false;

    public int $productCount = 0;

    public int $totalPrice = 0;

    public array $cartItems;

    public $products;

    public function mount()
    {
        $this->setCartData();
    }

    public function __construct()
    {
        $this->cartService = app(CartService::class);
    }

    public function render()
    {
        return view('livewire.checkout.cart');
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
        $this->products = $this->cartService->getProducts();
        $this->totalPrice = $this->cartService->getTotalPrice();
    }

    public function clearCart()
    {
        $this->cartService->clear();
        $this->setCartData();
        $this->dispatch('cartCleared');
    }
}

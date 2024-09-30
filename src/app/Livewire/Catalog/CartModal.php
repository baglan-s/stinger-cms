<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;
use App\Services\CartService;

class CartModal extends Component
{
    private ProductService $productService;

    private CartService $cartService;

    public bool $hasProduct = false;

    public int $productCount = 0;

    public int $totalPrice = 0;

    public array $cartItems;

    public $products;

    protected $listeners = [
        'productAddToCart' => 'onProductAddToCart',
        'productRemoveFromCart' => 'onProductRemoveFromCart',
        'cartIncremented' => 'setCartData',
        'cartDecremented' => 'setCartData',
        'cartCleared' => 'setCartData',
    ];

    public function mount()
    {
        $this->setCartData();
    }

    public function __construct()
    {
        $this->productService = app(ProductService::class);
        $this->cartService = app(CartService::class);
    }

    public function render()
    {
        return view('livewire.catalog.cart-modal');
    }

    public function addToCart(int $productId, int $quantity = 1)
    {
        $this->cartService->add($productId, $quantity);
        $this->setCartData();
    }

    public function removeFromCart(int $productId, int $quantity = 1)
    {
        $this->cartService->remove($productId, $quantity);
        $this->setCartData();
    }

    public function setCartData()
    {
        $this->cartItems = $this->cartService->getItems();
        $this->productCount = $this->cartService->itemsCount();
        $this->hasProduct = $this->productCount > 0;
        $this->products = $this->cartService->getProducts();
        $this->totalPrice = $this->cartService->getTotalPrice();
    }

    public function onProductAddToCart(int $productId)
    {
        $this->addToCart($productId);
    }

    public function onProductRemoveFromCart(int $productId, int $quantity)
    {
        $this->removeFromCart($productId, $quantity);
    }

    public function toCart()
    {
        return redirect()->route('catalog.cart.index');
    }
}

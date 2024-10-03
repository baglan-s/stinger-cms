<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\CartService;

class Checkout extends Component
{
    private CartService $cartService;

    public $products;

    public string $currentStep;

    public function __construct()
    {
        $this->cartService = app(CartService::class);
    }

    public function mount()
    {
        $this->currentStep = 'delivery';
        $this->products = $this->cartService->getProducts();
    }

    public function render()
    {
        return view('livewire.catalog.checkout');
    }

    public function toStep(string $step)
    {
        $this->currentStep = $step;
    }
}

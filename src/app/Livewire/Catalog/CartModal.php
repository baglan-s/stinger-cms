<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;

class CartModal extends Component
{
    private ProductService $productService;

    public bool $hasProduct = false;

    public int $cartProductsCount = 0;

    public $products;

    public function mount()
    {
        
    }

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function render()
    {
        return view('livewire.catalog.cart-modal');
    }
}

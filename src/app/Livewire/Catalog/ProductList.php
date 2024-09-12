<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;

class ProductList extends Component
{
    private ProductService $productService;

    public array $products;

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount(iterable $products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.catalog.product-list');
    }
}

<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;

class Comparison extends Component
{
    private ProductService $productService;

    public $products;

    protected $listeners = [
        'comparison-modal-cleared' => 'onClearComparison',
    ];

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount()
    {
        $this->products = $this->productService->getRepository()->getComparisonProducts();
    }

    public function render()
    {
        return view('livewire.catalog.comparison');
    }

    public function onClearComparison()
    {
        $this->products = $this->productService->getRepository()->getComparisonProducts();
    }

    public function clearComparison()
    {
        $this->productService->getRepository()->clearComparisonProductIds();
        $this->products = $this->productService->getRepository()->getComparisonProducts();
        $this->dispatch('comparison-cleared');
    }
}

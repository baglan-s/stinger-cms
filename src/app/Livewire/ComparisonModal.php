<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\ProductService;

class ComparisonModal extends Component
{
    private ProductService $productService;

    public bool $hasComparison = false;

    public int $comparisonProductsCount = 0;

    public $products;

    protected $listeners = [
        'comparison-added' => 'onComparisonAdded', 
        'comparison-removed' => 'onComparisonRemoved',
        'comparison-cleared' => 'setProductsData',
    ];

    public function mount()
    {
        $this->setProductsData();
    }

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function render()
    {
        return view('livewire.comparison-modal');
    }

    public function setComparisonProductsCount()
    {
        $this->comparisonProductsCount = $this->productService->getRepository()->comparisonProductsCount();
    }

    public function setHasComparisonProducts()
    {
        $this->hasComparison = $this->productService->getRepository()->hasComparisonProducts();
    }

    public function setComparisonProducts()
    {
        $this->products = $this->productService->getRepository()->getComparisonProducts(3);
    }

    public function setProductsData()
    {
        $this->setHasComparisonProducts();
        $this->setComparisonProductsCount();
        $this->setComparisonProducts();
    }

    public function onComparisonAdded()
    {
        $this->setProductsData();
    }

    public function onComparisonRemoved()
    {
        $this->setProductsData();
    }

    public function clearComparison()
    {
        $this->productService->getRepository()->clearComparisonProductIds();
        $this->setProductsData();
        $this->dispatch('comparison-modal-cleared');
    }

    public function toComparison()
    {
        return redirect('comparison');
    }
}

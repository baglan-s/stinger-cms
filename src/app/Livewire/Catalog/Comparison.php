<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Models\Catalog\Product;
use App\Services\ProductService;
use App\Models\Catalog\Specification;
use App\Models\Catalog\ProductCategory;

class Comparison extends Component
{
    private ProductService $productService;

    public $products;

    public $comparisonProductIds;

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
        $this->comparisonProductIds = $this->productService->getRepository()->getComparisonProductIds();
    }

    public function render()
    {
        $categoryIds = $this->products->pluck('product_category_id')->toArray();
        // Характеристики категории, для режима "Все характеристики"
        $categorySpecs = ProductCategory::where('active', true)
            ->with([
                'specifications' => function ($query) use ($categoryIds) {
                    $query->whereIn('product_category_id', $categoryIds);
                }
            ])
            ->whereIn('id', $categoryIds)
            ->get();
            
        // Характеристики товара, для режима "Только различия"
        $productSpecs = Product::where('active', true)
                ->with([
                    'specifications' => function ($query) {
                        $query->whereIn('product_id', $this->comparisonProductIds)->with('productValues');
                    }
                ])
                ->whereIn('id', $this->comparisonProductIds)
                ->get();

        $specifications = Specification::where('active', true)
                ->whereHas('products', function ($query) {
                    $query->where('active', true)
                        ->whereIn('product_id', $this->comparisonProductIds);
                })
                ->with('productValues')
                ->get();

        return view('livewire.catalog.comparison', compact('specifications', 'productSpecs', 'categorySpecs'));
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

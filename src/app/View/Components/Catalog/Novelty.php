<?php

namespace App\View\Components\Catalog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\ProductService;

class Novelty extends Component
{
    private ProductService $productService;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog.novelty', [
            'products' => $this->productService->getRepository()->latest(),
        ]);
    }
}

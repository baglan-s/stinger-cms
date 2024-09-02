<?php

namespace App\View\Components\Catalog;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Services\ProductCategoryService;

class Category extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private ProductCategoryService $productCategoryService,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = $this->productCategoryService->getRepository()
            ->getWithChildren();

        return view('components.catalog.category', compact('categories'));
    }
}

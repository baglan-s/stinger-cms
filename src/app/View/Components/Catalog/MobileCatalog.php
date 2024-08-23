<?php

namespace App\View\Components\Catalog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\ProductCategoryService;

class MobileCatalog extends Component
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

        return view('components.catalog.mobile-catalog', compact('categories'));
    }
}

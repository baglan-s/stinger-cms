<?php

namespace App\View\Components\Catalog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimilarProducts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected iterable $products) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog.similar-products', [
            'products' => $this->products,
        ]);
    }
}

<?php

namespace App\View\Components\Catalog\CartSteps;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Catalog\Store;

class Delivery extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $shippingMethod,
        public Store|null $selectedStore = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog.cart-steps.delivery');
    }
}

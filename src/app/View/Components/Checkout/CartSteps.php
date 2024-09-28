<?php

namespace App\View\Components\Checkout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CartSteps extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $stepName = 'cart',
        public array $steps = ['cart', 'delivery', 'payment', 'confirm'],
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkout.cart-steps', [
            'stepName' => $this->stepName,
            'steps' => $this->steps,
        ]);
    }
}

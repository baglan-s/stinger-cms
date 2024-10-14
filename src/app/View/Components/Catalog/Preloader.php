<?php

namespace App\View\Components\Catalog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Preloader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $class = []
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog.preloader');
    }
}

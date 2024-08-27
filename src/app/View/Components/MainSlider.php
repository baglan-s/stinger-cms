<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\BannerService;

class MainSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private BannerService $bannerService,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-slider', [
            'slides' => $this->bannerService->getRepository()
                ->model()
                ->scopeActive()
                ->get()
        ]);
    }
}

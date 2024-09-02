<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\GalleryService;

class Partners extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private GalleryService $galleryService,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partners', [
            'gallery' => $this->galleryService->getPartners()
        ]);
    }
}

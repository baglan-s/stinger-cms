<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\VideoReviewService;

class VideoReview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private VideoReviewService $videoReviewService,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-review', [
            'videoReviews' => $this->videoReviewService->getActive()
        ]);
    }
}

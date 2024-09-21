<?php

namespace App\View\Components\Catalog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;
use App\Services\SettingService;
use App\Models\Setting;

class WeeklyProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private SettingService $settingService,
        private $timeZone = 'Asia/Almaty',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $setting = $this->settingService->getSetting();
        $product = $this->isProductValid($setting) ? $setting->weeklyProduct : null;

        return view('components.catalog.weekly-product', compact('product'));
    }

    private function isProductValid(Setting $setting)
    {
        $startsAt = Carbon::parse($setting->weekly_product_starts_at, $this->timeZone);
        $endsAt = Carbon::parse($setting->weekly_product_ends_at, $this->timeZone);
        $currentDate = Carbon::now($this->timeZone);
 
        return $setting 
            && $setting->weekly_product_id 
            && !$startsAt->gt($currentDate)
            && !$endsAt->lt($currentDate);
    }
}

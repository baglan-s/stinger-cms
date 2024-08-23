<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SettingService;

class HeaderController extends Controller
{
    public function __construct(
        private SettingService $settingService
    ) {}

    public function render()
    {
        return view('partials.header', [
            'mainLogo' => 'storage/' . $this->settingService->getSetting()?->main_logo
        ]);
    }
}

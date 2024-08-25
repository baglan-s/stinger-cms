<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SettingService;
use App\Services\MenuService;

class HeaderController extends Controller
{
    public function __construct(
        private SettingService $settingService,
        private MenuService $menuService,
    ) {}

    public function render()
    {
        return view('partials.header', [
            'mainLogo' => 'storage/' . $this->settingService->getSetting()?->main_logo,
            'menus' => $this->menuService->getByTypeCode('header_menu')
        ]);
    }
}

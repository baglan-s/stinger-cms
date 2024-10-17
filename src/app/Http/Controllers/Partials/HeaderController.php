<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SettingService;
use App\Services\MenuService;
use App\Repositories\LanguageRepository;

class HeaderController extends Controller
{
    public function __construct(
        private SettingService $settingService,
        private MenuService $menuService,
        private LanguageRepository $languageRepository,
    ) {}

    public function render()
    {
        $languages = $this->languageRepository->model()->where('active', true)->get();

        return view('partials.header', [
            'mainLogo' => 'storage/' . $this->settingService->getSetting()?->main_logo,
            'menus' => $this->menuService->getByTypeCode('header_menu'),
            'languages' => $languages,
            'currentLanguage' => $languages->where('code', app()->getLocale())->first(),
        ]);
    }
}

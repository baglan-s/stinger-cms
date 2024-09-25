<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\SettingRepository;
use App\Models\Language;

class SettingService extends Service
{
    public function __construct(
        protected SettingRepository $repository
    ) {}

    public function initialize()
    {
        $setting = $this->repository->get();
        $language = Language::where('code', config('app.locale'))->first();

        if (!$setting) {
            $setting = $this->repository->create([
                'application_name' => config('app.name'),
                'application_email' => config('app.email'),
                'language_id' => $language?->id
            ]);
        }

        return $setting;
    }

    public function getSetting()
    {
        return $this->repository->get();
    }

    public function getWeeklyProduct()
    {
        return $this->repository->get()?->weeklyProduct;
    }
}
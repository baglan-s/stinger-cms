<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\SettingRepository;

class SettingService extends Service
{
    public function __construct(
        protected SettingRepository $repository
    ) {}

    public function initialize()
    {
        $setting = $this->repository->get();

        if (!$setting) {
            $setting = $this->repository->create([
                'application_name' => config('app.name'),
                'application_email' => config('app.email'),
            ]);
        }

        return $setting;
    }

    public function getSetting()
    {
        return $this->repository->get();
    }
}
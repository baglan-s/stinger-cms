<?php

namespace App\Repositories;

use App\Models\Setting;
use App\Repositories\Repository;

class SettingRepository extends Repository
{
    protected $model = Setting::class;

    public function get()
    {
        return $this->model()->first();
    }
}
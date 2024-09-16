<?php

namespace App\Repositories;

use App\Models\Catalog\City;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Cache;

class CityRepository extends Repository
{
    protected $model = City::class;

    public function getActive()
    {
        return Cache::remember('cities', 86400, function () {
            return $this->model()
                ->scopeActive()
                ->get();
        });
    }
    
}
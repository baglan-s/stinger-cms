<?php

namespace App\Repositories;

use App\Models\Catalog\Store;
use App\Repositories\Repository;

class StoreRepository extends Repository
{
    protected $model = Store::class;

    public function getPublicLocalByCityId($cityId)
    {
        return $this->model()
            ->where('city_id', $cityId)
            ->where('is_public', true)
            ->get();
    }
}
<?php

namespace App\Repositories;

use App\Models\Catalog\PriceType;
use App\Repositories\Repository;

class PriceTypeRepository extends Repository
{
    protected $model = PriceType::class;

    public function firstOrCreate(string $name, string $guid, string $id_1c = null): PriceType
    {
        $priceType = $this->model()->firstOrCreate([
            'name' => $name,
            'guid' => $guid,
        ]);

        if ($id_1c) {
            $priceType->update(['id_1c' => $id_1c]);
        }

        return $priceType;
    }
}
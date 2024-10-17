<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;
use App\Models\Catalog\City;

class StoreAdapter
{
    public static function adaptOneCStore(array $store, City $city): array
    {
        return [
            'guid' => $store['guid'],
            'id_1c' => $store['id'] ?? null,
            'active' =>!$store['notShowed'],
            'is_distributor' => $store['isDistributor'] ?? false,
            'city_id' => $city->id,
            'sort' => 0
        ];
    }

    public static function adaptOneCStoreTranslation(array $store, string $languageId): array
    {
        return [
            'name' => $store['name'],
            'slug' => Str::slug($store['name']),
            'language_id' => $languageId,
        ];
    }
}
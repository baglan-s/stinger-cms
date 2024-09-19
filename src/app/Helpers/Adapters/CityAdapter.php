<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;
use App\Models\Catalog\PriceType;

class CityAdapter
{
    public static function adaptOneCCity(array $city, PriceType $priceType): array
    {
        return [
            'guid' => $city['guid'],
            'id_1c' => $city['id_1c'] ?? null,
            'price_type_id' => $priceType->id,
            'sort' => 0
        ];
    }

    public static function adaptOneCCityTranslation(array $city, string $languageId): array
    {
        return [
            'name' => $city['name'],
            'slug' => Str::slug($city['name']),
            'language_id' => $languageId,
        ];
    }
}
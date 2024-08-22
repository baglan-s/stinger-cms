<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;

class BrandAdapter
{
    public static function adaptOneCBrand(array $brand): array
    {
        return [
            'guid' => $brand['guid'],
            'active' =>!$brand['markedForDeletion'],
            'sort' => 0
        ];
    }

    public static function adaptOneCBrandTranslation(array $brand, string $languageId): array
    {
        return [
            'name' => $brand['name'],
            'slug' => Str::slug($brand['name']),
            'language_id' => $languageId,
        ];
    }
}
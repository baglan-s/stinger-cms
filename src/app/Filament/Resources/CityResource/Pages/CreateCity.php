<?php

namespace App\Filament\Resources\CityResource\Pages;

use App\Filament\Resources\CityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\City;
use Illuminate\Support\Str;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $city = City::create([
            'price_type_id' => $data['price_type_id'] ?? null,
            'guid' => $data['guid'] ?? null,
            'kaspi_index' => $data['kaspi_index'] ?? null,
            'active' => $data['active'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);
        
        foreach ($data['translations'] as $key => $translation) {
            $city->translations()->create([
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'language_id' => $translation['language_id'],
            ]);
        }

        return $city;
    }
}

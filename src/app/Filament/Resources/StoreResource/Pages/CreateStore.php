<?php

namespace App\Filament\Resources\StoreResource\Pages;

use App\Filament\Resources\StoreResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Catalog\Store;

class CreateStore extends CreateRecord
{
    protected static string $resource = StoreResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $store = Store::create([
            'city_id' => $data['city_id'] ?? null,
            'guid' => $data['guid'] ?? null,
            'id_1c' => $data['id_1c'] ?? null,
            'image' => $data['image'] ?? null,
            'lon' => $data['lon'] ?? null,
            'lat' => $data['lat'] ?? null,
            'active' => $data['active'] ?? false,
            'is_public' => $data['is_public'] ?? false,
            'is_distributor' => $data['is_distributor'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);

        if (isset($data['images']) && !empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $store->images()->create([
                    'path' => $image,
                ]);
            }
        }
        
        foreach ($data['translations'] as $translation) {
            $store->translations()->create([
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'] ?? null,
                'address' => $translation['address'] ?? null,
                'phone' => $translation['phone'] ?? null,
                'email' => $translation['email'] ?? null,
                'language_id' => $translation['language_id'],
            ]);
        }

        return $store;
    }
}

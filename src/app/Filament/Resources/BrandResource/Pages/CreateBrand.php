<?php

namespace App\Filament\Resources\BrandResource\Pages;

use App\Filament\Resources\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Brand;
use Illuminate\Support\Str;

class CreateBrand extends CreateRecord
{
    protected static string $resource = BrandResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $brand = Brand::create([
            'guid' => $data['guid'] ?? null,
            'image' => $data['image'] ?? null,
            'active' => $data['active'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);
        
        foreach ($data['translations'] as $key => $translation) {
            $slug = $translation['slug'] ?? Str::slug($translation['name']);
            $brand->translations()->create([
                'name' => $translation['name'],
                'slug' => $slug . '_' .$key,
                'language_id' => $translation['language_id'],
            ]);
        }

        return $brand;
    }
}

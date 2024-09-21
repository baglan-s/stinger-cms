<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use App\Filament\Resources\ProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\ProductCategory;
use Illuminate\Support\Str;

class CreateProductCategory extends CreateRecord
{
    protected static string $resource = ProductCategoryResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $category = ProductCategory::create([
            'parent_id' => $data['parent_id'] ?? null,
            'guid' => $data['guid'] ?? null,
            'image' => $data['image'] ?? null,
            'active' => $data['active'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);
        
        foreach ($data['translations'] as $key => $translation) {
            $slug = $translation['slug'] ?? Str::slug($translation['name']);
            $category->translations()->create([
                'name' => $translation['name'],
                'slug' => $slug . '_' .$key,
                'description' => $translation['description'],
                'meta_title' => $translation['meta_title'],
                'meta_description' => $translation['meta_description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        if (isset($data['specifications'])) {
            $category->specifications()->sync($data['specifications']);
        }

        if (isset($data['brands'])) {
            $category->brands()->sync($data['brands']);
        }

        return $category;
    }
}

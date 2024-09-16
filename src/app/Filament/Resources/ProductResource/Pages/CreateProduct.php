<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Product;
use Illuminate\Support\Str;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $product = Product::create([
            'product_category_id' => $data['product_category_id'],
            'brand_id' => $data['brand_id'] ?? null,
            'parent_id' => $data['parent_id'] ?? null,
            'guid' => $data['guid'] ?? null,
            'weight' => $data['weight'] ?? null,
            'weight_unit' => $data['weight_unit'] ?? null,
            'volume' => $data['volume'] ?? null,
            'volume_unit' => $data['volume_unit'] ?? null,
            'article' => $data['article'] ?? null,
            'active' => $data['active'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);
        
        foreach ($data['translations'] as $key => $translation) {
            $product->translations()->create([
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'],
                'meta_title' => $translation['meta_title'],
                'meta_description' => $translation['meta_description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        if (isset($data['images']) && !empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $product->images()->create([
                    'path' => $image,
                ]);
            }
        }

        if (isset($data['specifications'])) {
            $product->specifications()->sync(array_keys($data['specifications']));
            $productSpecifications = $product->specifications;

            foreach ($data['specifications'] as $specId => $specValue) {
                $specification = $productSpecifications->where('id', $specId)->first();
                
                if ($specification) {
                    $specification->productValues()->sync(is_array($specValue) ? $specValue : [$specValue]);
                }
            }
        }

        return $product;
    }
}

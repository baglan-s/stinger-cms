<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Catalog\Product;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $product = Product::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $product->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'description' => $translation->description ?? null,
                'meta_title' => $translation->meta_title ?? null,
                'meta_description' => $translation->meta_description ?? null,
                'language_id' => $language->id,
            ];
        }

        $data['images'] = $product->images->pluck('path')->toArray();

        foreach ($product->specifications as $specification) {
            $data['specifications'][$specification->id] = $specification->multiple 
                ? $specification->productValues?->pluck('id')?->toArray()
                : $specification->productValues->first()->id ?? null;
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $product, array $data): Model
    {
        $product->update([
            'parent_id' => $data['parent_id'] != $product->id ? $data['parent_id'] : null,
            'product_category_id' => $data['product_category_id'],
            'brand_id' => $data['brand_id'] ?? null,
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
            $updates = [
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'] ?? null,
                'meta_title' => $translation['meta_title'] ?? null,
                'meta_description' => $translation['meta_description'] ?? null,
            ];
            $productTranslation = $product->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$productTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $product->translations()->create($updates);
            } else {
                $productTranslation->update($updates);
            }
        }

        $product->images()->delete();

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

<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use App\Filament\Resources\ProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Catalog\ProductCategory;

class EditProductCategory extends EditRecord
{
    protected static string $resource = ProductCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $category = ProductCategory::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $category->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'description' => $translation->description ?? null,
                'meta_title' => $translation->meta_title ?? null,
                'meta_description' => $translation->meta_description ?? null,
                'language_id' => $language->id,
            ];
        }

        $data['specifications'] = $category->specifications()
            ->pluck('specifications.id')
            ->toArray();
    
        return $data;
    }

    protected function handleRecordUpdate(Model $category, array $data): Model
    {
        $category->update([
            'parent_id' => $data['parent_id'] != $category->id ? $data['parent_id'] : null,
            'guid' => $data['guid'] ?? null,
            'image' => $data['image'] ?? null,
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
            $categoryTranslation = $category->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$categoryTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $categoryTranslation = $category->translations()->create($updates);
            } else {
                $categoryTranslation->update($updates);
            }
        }

        if (isset($data['specifications'])) {
            $category->specifications()->sync($data['specifications']);
        }

        return $category;
    }
}

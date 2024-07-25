<?php

namespace App\Filament\Resources\PostCategoryResource\Pages;

use App\Filament\Resources\PostCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Post\PostCategory;


class EditPostCategory extends EditRecord
{
    protected static string $resource = PostCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $category = PostCategory::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $category->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'description' => $translation->description ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $postCategory, array $data): Model
    {
        $postCategory->update([
            'parent_id' => $data['parent_id'] != $postCategory->id ? $data['parent_id'] : null,
            'sort' => $data['sort'],
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $categoryTranslation = $postCategory->translations()->firstOrCreate([
                'language_id' => $translation['language_id'],
            ]);

            $categoryTranslation->update([
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']) . '_' . $key,
                'description' => $translation['description'] ?? null,
            ]);
        }

        return $postCategory;
    }
}

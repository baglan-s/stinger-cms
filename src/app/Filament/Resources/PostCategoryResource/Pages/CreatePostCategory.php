<?php

namespace App\Filament\Resources\PostCategoryResource\Pages;

use App\Filament\Resources\PostCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\PostCategory;
use Illuminate\Support\Str;

class CreatePostCategory extends CreateRecord
{
    protected static string $resource = PostCategoryResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $category = PostCategory::create([
            'parent_id' => $data['parent_id'] ?? null,
            'sort' => $data['sort'] ?? null,
        ]);
        
        foreach ($data['translations'] as $key => $translation) {
            $slug = $translation['slug'] ?? Str::slug($translation['name']);
            $category->translations()->create([
                'name' => $translation['name'],
                'slug' => $slug . '_' .$key,
                'description' => $translation['description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $category;
    }
}

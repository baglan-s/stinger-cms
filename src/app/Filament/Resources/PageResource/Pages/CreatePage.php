<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use Illuminate\Support\Str;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $page = Page::create([
            'active' => $data['active'],
            'user_id' => auth()->user()->id,
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $slug = $translation['slug'] ?? Str::slug($translation['title']);

            $page->translations()->create([
                'title' => $translation['title'],
                'slug' => $slug . '_' .$key,
                'meta_title' => $translation['meta_title'],
                'meta_description' => $translation['meta_description'],
                'content' => $translation['content'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $page;
    }
}

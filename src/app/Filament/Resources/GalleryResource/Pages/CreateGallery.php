<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;
use Illuminate\Support\Str;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $gallery = Gallery::create([
            'sort' => $data['sort'],
            'active' => $data['active'],
            'user_id' => auth()->user()->id,
        ]);

        if (isset($data['images']) && !empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $gallery->images()->create([
                    'path' => $image,
                ]);
            }
        }

        foreach ($data['translations'] as $key => $translation) {
            $slug = $translation['slug'] ?? Str::slug($translation['name']);
            $gallery->translations()->create([
                'name' => $translation['name'],
                'slug' => $slug . '_' .$key,
                'description' => $translation['description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $gallery;
    }
}

<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $gallery = Gallery::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $gallery->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'description' => $translation->description ?? null,
                'language_id' => $language->id,
            ];
        }

        $data['images'] = $gallery->images->pluck('path')->toArray();
    
        return $data;
    }

    protected function handleRecordUpdate(Model $gallery, array $data): Model
    {
        $gallery->update([
            'active' => $data['active'],
            'sort' => $data['sort'],
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'] ?? null,
            ];
            $galleryTranslation = $gallery->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$galleryTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $gallery->translations()->create($updates);
            } else {
                $galleryTranslation->update($updates);
            }
        }

        $gallery->images()->delete();

        if (isset($data['images']) && !empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $gallery->images()->create([
                    'path' => $image,
                ]);
            }
        }

        return $gallery;
    }
}

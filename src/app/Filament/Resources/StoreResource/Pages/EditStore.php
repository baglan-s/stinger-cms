<?php

namespace App\Filament\Resources\StoreResource\Pages;

use App\Filament\Resources\StoreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Catalog\Store;

class EditStore extends EditRecord
{
    protected static string $resource = StoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $store = Store::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $store->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? Str::slug($translation->name ?? null),
                'description' => $translation->description ?? null,
                'address' => $translation->address ?? null,
                'phone' => $translation->phone ?? null,
                'email' => $translation->email ?? null,
                'language_id' => $language->id,
            ];
        }

        $data['images'] = $store->images->pluck('path')->toArray();

        return $data;
    }

    protected function handleRecordUpdate(Model $store, array $data): Model
    {
        $store->update([
            'city_id' => $data['city_id'] ?? null,
            'guid' => $data['guid'] ?? null,
            'id_1c' => $data['id_1c'] ?? null,
            'image' => $data['image'] ?? null,
            'lon' => $data['lon'] ?? null,
            'lat' => $data['lat'] ?? null,
            'active' => $data['active'] ?? false,
            'is_public' => $data['is_public'] ?? false,
            'is_distributor' => $data['is_distributor'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'] ?? null,
                'address' => $translation['address'] ?? null,
                'phone' => $translation['phone'] ?? null,
                'email' => $translation['email'] ?? null,
            ];
            $storeTranslation = $store->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$storeTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $store->translations()->create($updates);
            } else {
                $storeTranslation->update($updates);
            }
        }

        $store->images()->delete();

        if (isset($data['images']) && !empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $store->images()->create([
                    'path' => $image,
                ]);
            }
        }

        return $store;
    }
}

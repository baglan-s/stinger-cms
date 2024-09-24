<?php

namespace App\Filament\Resources\CityResource\Pages;

use App\Filament\Resources\CityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Catalog\City;
use App\Models\Language;

class EditCity extends EditRecord
{
    protected static string $resource = CityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $city = City::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $city->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $city, array $data): Model
    {
        $city->update([
            'price_type_id' => $data['price_type_id'] ?? null,
            'guid' => $data['guid'] ?? null,
            'kaspi_index' => $data['kaspi_index'] ?? null,
            'active' => $data['active'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
            ];
            $cityTranslation = $city->translations()
                ->where('language_id', $translation['language_id'])    
                ->first();

            if (!$cityTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $city->translations()->create($updates);
            } else {
                $cityTranslation->update($updates);
            }
        }

        return $city;
    }
}

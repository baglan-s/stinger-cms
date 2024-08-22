<?php

namespace App\Filament\Resources\BrandResource\Pages;

use App\Filament\Resources\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Catalog\Brand;

class EditBrand extends EditRecord
{
    protected static string $resource = BrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $brand = Brand::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $brand->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $brand, array $data): Model
    {
        $brand->update([
            'guid' => $data['guid'] ?? null,
            'image' => $data['image'] ?? null,
            'active' => $data['active'] ?? false,
            'sort' => $data['sort'] ?? 0,
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']) . '_' . $key,
            ];
            $brandTranslation = $brand->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$brandTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $brand->translations()->create($updates);
            } else {
                $brandTranslation->update($updates);
            }
        }

        return $brand;
    }
}

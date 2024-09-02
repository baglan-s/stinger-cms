<?php

namespace App\Filament\Resources\SpecificationResource\Pages;

use App\Filament\Resources\SpecificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Specification;
use Illuminate\Support\Str;

class EditSpecification extends EditRecord
{
    protected static string $resource = SpecificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $specification = Specification::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $specification->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'slug' => $translation->slug ?? null,
                'description' => $translation->description ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $specification, array $data): Model
    {
        $specification->update([
            'active' => $data['active'],
            'multiple' => $data['multiple'],
            'sort' => $data['sort'],
        ]);

        foreach ($data['translations'] as $translation) {
            $updates = [
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'] ?? null,
            ];
            $specificationTranslation = $specification->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$specificationTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $specification->translations()->create($updates);
            } else {
                $specificationTranslation->update($updates);
            }
        }

        return $specification;
    }
}

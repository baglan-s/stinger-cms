<?php

namespace App\Filament\Resources\SpecificationResource\Pages;

use App\Filament\Resources\SpecificationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\SpecificationResource\RelationManagers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Specification;
use Illuminate\Support\Str;

class CreateSpecification extends CreateRecord
{
    protected static string $resource = SpecificationResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $specification = Specification::create([
            'multiple' => $data['multiple'] ?? false,
            'active' => $data['active'] ?? null,
            'sort' => $data['sort']
        ]);
        
        foreach ($data['translations'] as $translation) {
            $specification->translations()->create([
                'name' => $translation['name'],
                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                'description' => $translation['description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $specification;
    }
}

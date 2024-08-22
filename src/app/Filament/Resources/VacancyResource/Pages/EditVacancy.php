<?php

namespace App\Filament\Resources\VacancyResource\Pages;

use App\Filament\Resources\VacancyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;

class EditVacancy extends EditRecord
{
    protected static string $resource = VacancyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $vacancy = Vacancy::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $vacancy->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'title' => $translation->title ?? null,
                'description' => $translation->description ?? null,
                'requirements' => $translation->requirements ?? null,
                'responsibilities' => $translation->responsibilities ?? null,
                'conditions' => $translation->conditions ?? null,
                'key_skills' => $translation->key_skills ?? null,
                'language_id' => $language->id,
            ];
        }

        return $data;
    }

    protected function handleRecordUpdate(Model $vacancy, array $data): Model
    {
        $vacancy->update([
            'sort' => $data['sort'],
            'active' => $data['active'],
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'title' => $translation['title'],
                'description' => $translation['description'],
                'requirements' => $translation['requirements'],
                'responsibilities' => $translation['responsibilities'],
                'conditions' => $translation['conditions'],
                'key_skills' => $translation['key_skills'],
            ];
            $vacancyTranslation = $vacancy->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$vacancyTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $vacancy->translations()->create($updates);
            } else {
                $vacancyTranslation->update($updates);
            }
        }

        return $vacancy;
    }
}

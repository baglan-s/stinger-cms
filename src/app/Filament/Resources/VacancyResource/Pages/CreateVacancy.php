<?php

namespace App\Filament\Resources\VacancyResource\Pages;

use App\Filament\Resources\VacancyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;

class CreateVacancy extends CreateRecord
{
    protected static string $resource = VacancyResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $vacancy = Vacancy::create([
            'sort' => $data['sort'],
            'active' => $data['active'],
        ]);

        foreach ($data['translations'] as $key => $translation) {

            $vacancy->translations()->create([
                'title' => $translation['title'],
                'description' => $translation['description'],
                'requirements' => $translation['requirements'],
                'responsibilities' => $translation['responsibilities'],
                'conditions' => $translation['conditions'],
                'key_skills' => $translation['key_skills'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $vacancy;
    }
}

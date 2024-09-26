<?php

namespace App\Models\Pages;

use App\Models\Traits\HasScopes;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\VacancyTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = VacancyTranslation::class;
}

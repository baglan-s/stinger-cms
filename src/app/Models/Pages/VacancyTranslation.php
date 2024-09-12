<?php

namespace App\Models\Pages;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VacancyTranslation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

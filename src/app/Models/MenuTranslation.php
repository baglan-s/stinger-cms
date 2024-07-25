<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class MenuTranslation extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

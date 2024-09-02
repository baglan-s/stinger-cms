<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Specification;
use App\Models\Language;

class SpecificationTranslation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function specification()
    {
        return $this->belongsTo(Specification::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

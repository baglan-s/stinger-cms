<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Specification;
use App\Models\Catalog\SpecificationValueTranslation;
use App\Models\Traits\HasTranslation;

class SpecificationValue extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = SpecificationValueTranslation::class;

    public function specification()
    {
        return $this->belongsTo(Specification::class);
    }
}

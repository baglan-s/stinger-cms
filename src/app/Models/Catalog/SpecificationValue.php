<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasScopes;
use App\Models\Catalog\Specification;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\SpecificationValueTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecificationValue extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = SpecificationValueTranslation::class;

    public function specification()
    {
        return $this->belongsTo(Specification::class);
    }
}

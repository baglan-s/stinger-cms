<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\CityTranslation;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\PriceType;
use App\Models\Traits\HasScopes;

class City extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $translationClass = CityTranslation::class;

    public function priceType()
    {
        return $this->belongsTo(PriceType::class);
    }
}

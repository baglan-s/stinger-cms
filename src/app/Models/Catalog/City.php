<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\CityTranslation;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\PriceType;

class City extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $translationClass = CityTranslation::class;

    public function priceType()
    {
        return $this->belongsTo(PriceType::class);
    }
}

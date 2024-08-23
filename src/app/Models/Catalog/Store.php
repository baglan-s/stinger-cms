<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\StoreTranslation;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\City;
use App\Models\Catalog\StoreImage;

class Store extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations', 'images'];

    protected $translationClass = StoreTranslation::class;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function images()
    {
        return $this->hasMany(StoreImage::class);
    }
}

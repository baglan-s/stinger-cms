<?php

namespace App\Models\Catalog;

use App\Models\Catalog\City;
use App\Models\Traits\HasScopes;
use App\Models\Catalog\StoreImage;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\StoreTranslation;
use App\Models\Catalog\ProductStock;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory, HasTranslation, HasScopes;

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

    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }
}

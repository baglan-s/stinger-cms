<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\BrandTranslation;
use App\Models\Traits\HasTranslation;

class Brand extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = BrandTranslation::class;
}

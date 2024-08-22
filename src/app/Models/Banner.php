<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BannerTranslation;
use App\Models\Traits\HasTranslation;

class Banner extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = BannerTranslation::class;
}

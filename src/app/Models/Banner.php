<?php

namespace App\Models;

use App\Models\Traits\HasScopes;
use App\Models\BannerTranslation;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = BannerTranslation::class;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\BannerTranslation;

class Banner extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $with = ['translations'];

    public function translations()
    {
        return $this->hasMany(BannerTranslation::class, 'banner_id');
    }

    public function translation()
    {
        return $this->translations()->whereHas('language', function ($q) {
            $q->where('code', app()->getLocale());
        })->first();
    }
}

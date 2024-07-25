<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\GalleryImage;
use App\Models\GalleryTranslation;

class Gallery extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $with = ['translations', 'images'];

    public function translations()
    {
        return $this->hasMany(GalleryTranslation::class, 'gallery_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function translation()
    {
        return $this->translations()->whereHas('language', function ($q) {
            $q->where('code', app()->getLocale());
        })->first();
    }

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id');
    }
}

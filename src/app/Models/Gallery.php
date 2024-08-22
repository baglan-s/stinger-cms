<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\GalleryImage;
use App\Models\GalleryTranslation;
use App\Models\Traits\HasTranslation;

class Gallery extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations', 'images'];

    protected $translationClass = GalleryTranslation::class;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id');
    }
}

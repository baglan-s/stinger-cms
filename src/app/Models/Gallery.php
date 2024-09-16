<?php

namespace App\Models;

use App\Models\User;
use App\Models\GalleryImage;
use App\Models\Traits\HasScopes;
use App\Models\GalleryTranslation;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory, HasTranslation, HasScopes;

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

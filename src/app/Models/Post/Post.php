<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\PostCategory;
use App\Models\Post\PostTranslation;
use App\Models\User;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function translations()
    {
        return $this->hasMany(PostTranslation::class, 'post_id');
    }

    public function translation()
    {
        return $this->translations()->whereHas('language', function ($q) {
            $q->where('code', app()->getLocale());
        })->first();
    }
}

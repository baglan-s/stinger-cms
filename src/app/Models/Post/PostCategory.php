<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\Post;
use App\Models\Post\PostCategoryTranslation;

class PostCategory extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $table = 'post_categories';

    protected $with = ['translations'];

    public function children()
    {
        return $this->hasMany(PostCategory::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(PostCategory::class, 'parent_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_category_id');
    }

    public function translations(): HasMany
    {
        return $this->hasMany(PostCategoryTranslation::class, 'post_category_id');
    }

    public function translation()
    {
        return $this->translations()->whereHas('language', function ($q) {
            $q->where('code', app()->getLocale());
        })->first();
    }
}

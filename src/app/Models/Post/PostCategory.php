<?php

namespace App\Models\Post;

use App\Models\Post\Post;
use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\PostCategoryTranslation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostCategory extends Model
{
    use HasFactory, HasScopes;

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

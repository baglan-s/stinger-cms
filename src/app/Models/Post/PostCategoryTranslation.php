<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class PostCategoryTranslation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'post_category_translations';

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}

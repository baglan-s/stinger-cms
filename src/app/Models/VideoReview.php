<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoReviewTranslation;
use App\Models\Traits\HasTranslation;
use App\Models\Traits\HasScopes;

class VideoReview extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = VideoReviewTranslation::class;
}

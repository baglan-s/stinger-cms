<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PageTranslation;
use App\Models\User;
use App\Models\Traits\HasTranslation;

class Page extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = PageTranslation::class;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

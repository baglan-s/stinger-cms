<?php

namespace App\Models;

use App\Models\User;
use App\Models\PageTranslation;
use App\Models\Traits\HasScopes;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = PageTranslation::class;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

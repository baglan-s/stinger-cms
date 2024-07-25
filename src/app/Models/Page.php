<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\PageTranslation;
use App\Models\User;

class Page extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $with = ['translations'];

    public function translations()
    {
        return $this->hasMany(PageTranslation::class);
    }

    public function translation()
    {
        return $this->translations()->whereHas('language', function ($q) {
            $q->where('code', app()->getLocale());
        })->first();
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

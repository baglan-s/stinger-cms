<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setting;

class SearchHint extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }
}

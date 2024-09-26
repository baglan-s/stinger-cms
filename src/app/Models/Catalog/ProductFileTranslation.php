<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class ProductFileTranslation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

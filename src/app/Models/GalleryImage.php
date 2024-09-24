<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryImage extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}

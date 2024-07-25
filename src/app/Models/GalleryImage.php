<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class GalleryImage extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class RoleTranslation extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}

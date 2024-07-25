<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoleTranslation;
use App\Models\User;
use App\Models\Permission;

class Role extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $with = ['translations', 'permissions'];

    public function translations(): HasMany
    {
        return $this->hasMany(RoleTranslation::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}

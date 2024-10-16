<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ServiceToken extends Model
{
    use HasFactory;

    protected $fillable = ['token', 'name', 'createa_at', 'updated_at'];

    public static function generate()
    {
        $token = Str::random(60);

        if (self::where('token', $token)->count() > 0) {
            return self::generate();
        }

        return $token;
    }
}

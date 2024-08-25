<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuTranslation;
use App\Models\Traits\HasTranslation;
use App\Models\MenuType;

class Menu extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = MenuTranslation::class;

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function type()
    {
        return $this->belongsTo(MenuType::class, 'menu_type_id');
    }
}

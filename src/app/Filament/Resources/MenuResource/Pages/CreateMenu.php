<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use Illuminate\Support\Str;

class CreateMenu extends CreateRecord
{
    protected static string $resource = MenuResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $menu = Menu::create([
            'link' => $data['link'],
            'parent_id' => $data['parent_id'] ?? null,
            'sort' => $data['sort'] ?? null,
        ]);
        
        foreach ($data['translations'] as $translation) {
            $menu->translations()->create([
                'name' => $translation['name'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $menu;
    }
}

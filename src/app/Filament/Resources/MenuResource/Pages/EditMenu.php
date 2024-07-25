<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class EditMenu extends EditRecord
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $category = Menu::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $category->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $menu, array $data): Model
    {
        $menu->update([
            'parent_id' => $data['parent_id'] != $menu->id ? $data['parent_id'] : null,
            'link' => $data['link'],
            'sort' => $data['sort'],
        ]);

        foreach ($data['translations'] as $translation) {
            $menuTranslation = $menu->translations()->firstOrCreate([
                'language_id' => $translation['language_id'],
            ]);

            $menuTranslation->update([
                'name' => $translation['name'],
            ]);
        }

        return $menu;
    }
}

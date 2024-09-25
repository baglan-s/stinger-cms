<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use App\Models\Language;
use App\Models\Permission;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Illuminate\Database\Eloquent\Model;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);

        $languages = Language::where('active', true)->get();
        $permissions = $this->record->permissions;
        $translations = [];
        $rolePermissions = [];

        foreach ($languages as $language) {
            $translation = $this->record->translations->where('language_id', $language->id)->first();
            $translations[$language->code] = [
                'name' => $translation->name ?? null,
                'language_id' => $language->id,
            ];
        }

        foreach ($permissions as $permission) {
            $rolePermissions[$permission->id] = $permission->name;
        }

        $this->record->translations = $translations;
      
        $this->record->permissions = $rolePermissions;

        $this->authorizeAccess();
        
        $this->fillForm();

        $this->previousUrl = url()->previous();
    }

    protected function handleRecordUpdate(Model $role, array $data): Model
    {
        $role->update([
            'slug' => $data['slug']
        ]);

        foreach ($data['translations'] as $translation) {
            $updates = [
                'name' => $translation['name'],
            ];
            $roleTranslation = $role->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$roleTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $roleTranslation = $role->translations()->create($updates);
            } else {
                $roleTranslation->update($updates);
            }
        }

        if (isset($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
        }

        return $role;
    }

}

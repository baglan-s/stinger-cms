<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Arr;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Support\Str;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $role = Role::create([
            'slug' => $data['slug'],
        ]);
        
        foreach ($data['translations'] as $translation) {
            $role->translations()->create([
                'name' => $translation['name'],
                'language_id' => $translation['language_id'],
            ]);
        }

        if (isset($data['permissions'])) {
            $role->permissions()->sync($data['permissions']);
        }

        return $role;
    }
}

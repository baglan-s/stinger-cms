<?php

namespace App\Filament\Resources\MenuTypeResource\Pages;

use App\Filament\Resources\MenuTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuType extends EditRecord
{
    protected static string $resource = MenuTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

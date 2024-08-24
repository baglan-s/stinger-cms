<?php

namespace App\Filament\Resources\MenuTypeResource\Pages;

use App\Filament\Resources\MenuTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuTypes extends ListRecords
{
    protected static string $resource = MenuTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\VideoReviewResource\Pages;

use App\Filament\Resources\VideoReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideoReviews extends ListRecords
{
    protected static string $resource = VideoReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

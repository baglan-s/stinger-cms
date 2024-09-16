<?php

namespace App\Filament\Resources\VideoReviewResource\Pages;

use App\Filament\Resources\VideoReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoReview;

class CreateVideoReview extends CreateRecord
{
    protected static string $resource = VideoReviewResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $review = VideoReview::create([
            'link' => $data['link'],
            'sort' => $data['sort'],
            'active' => $data['active'],
            'image' => $data['image'],
        ]);

        foreach ($data['translations'] as $translation) {
            $review->translations()->create([
                'title' => $translation['title'],
                'description' => $translation['description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $review;
    }
}

<?php

namespace App\Filament\Resources\VideoReviewResource\Pages;

use App\Filament\Resources\VideoReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use App\Models\VideoReview;
use Illuminate\Database\Eloquent\Model;

class EditVideoReview extends EditRecord
{
    protected static string $resource = VideoReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $review = VideoReview::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $review->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'title' => $translation->title ?? null,
                'subtitle' => $translation->description ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $review, array $data): Model
    {
        $review->update([
            'link' => $data['link'],
            'active' => $data['active'],
            'image' => $data['image'],
            'sort' => $data['sort'],
        ]);

        foreach ($data['translations'] as $translation) {
            $updates = [
                'title' => $translation['title'] ?? null,
                'description' => $translation['description'] ?? null,
            ];
            $reviewTranslation = $review->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$reviewTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $review->translations()->create($updates);
            } else {
                $reviewTranslation->update($updates);
            }
        }

        return $review;
    }
}

<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Model;

class EditBanner extends EditRecord
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $gallery = Banner::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $gallery->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'title' => $translation->title ?? null,
                'subtitle' => $translation->subtitle ?? null,
                'link' => $translation->link ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $banner, array $data): Model
    {
        $banner->update([
            'name' => $data['name'],
            'active' => $data['active'],
            'image' => $data['image'],
            'sort' => $data['sort'],
        ]);

        foreach ($data['translations'] as $translation) {
            $bannerTranslation = $banner->translations()->firstOrCreate([
                'language_id' => $translation['language_id'],
            ]);

            $bannerTranslation->update([
                'title' => $translation['title'] ?? null,
                'subtitle' => $translation['subtitle'] ?? null,
                'link' => $translation['link'] ?? null,
            ]);
        }

        return $banner;
    }
}

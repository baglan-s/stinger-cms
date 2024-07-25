<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banner;
use Illuminate\Support\Str;

class CreateBanner extends CreateRecord
{
    protected static string $resource = BannerResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $banner = Banner::create([
            'name' => $data['name'],
            'sort' => $data['sort'],
            'active' => $data['active'],
            'image' => $data['image'],
        ]);

        foreach ($data['translations'] as $translation) {
            $banner->translations()->create([
                'title' => $translation['title'],
                'subtitle' => $translation['subtitle'],
                'link' => $translation['link'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $banner;
    }
}

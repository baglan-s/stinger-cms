<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Page;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $page = Page::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $page->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'title' => $translation->title ?? null,
                'slug' => $translation->slug ?? null,
                'content' => $translation->content ?? null,
                'meta_title' => $translation->meta_title ?? null,
                'meta_description' => $translation->meta_description ?? null,
                'is_html' => $translation->is_html ?? null,
                'language_id' => $language->id,
            ];
        }

        return $data;
    }

    protected function handleRecordUpdate(Model $page, array $data): Model
    {
        $page->update([
            'active' => $data['active'],
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'title' => $translation['title'],
                'is_html' => $translation['is_html'],
                'content' => $translation['content'],
                'slug' => $translation['slug'] ?? Str::slug($translation['title']),
                'meta_title' => $translation['meta_title'],
                'meta_description' => $translation['meta_description'],
            ];
            $pageTranslation = $page->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$pageTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $page->translations()->create($updates);
            } else {
                $pageTranslation->update($updates);
            }
        }

        return $page;
    }
}

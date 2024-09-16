<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Post\Post;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $post = Post::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $post->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'title' => $translation->title ?? null,
                'slug' => $translation->slug ?? null,
                'content' => $translation->content ?? null,
                'meta_keywords' => $translation->meta_keywords ?? null,
                'meta_description' => $translation->meta_description ?? null,
                'language_id' => $language->id,
            ];
        }

        return $data;
    }

    protected function handleRecordUpdate(Model $post, array $data): Model
    {
        $post->update([
            'post_category_id' => $data['post_category_id'],
            'image' => $data['image'],
            'active' => $data['active'],
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $updates = [
                'title' => $translation['title'],
                'content' => $translation['content'],
                'slug' => $translation['slug'] ?? Str::slug($translation['title']) . '_' . $key,
                'meta_keywords' => $translation['meta_keywords'],
                'meta_description' => $translation['meta_description'],
            ];
            $postTranslation = $post->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$postTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $post->translations()->create($updates);
            } else {
                $postTranslation->update($updates);
            }
        }

        return $post;
    }
}

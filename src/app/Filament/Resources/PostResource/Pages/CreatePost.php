<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post\Post;
use Illuminate\Support\Str;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $post = Post::create([
            'post_category_id' => $data['post_category_id'],
            'image' => $data['image'],
            'active' => $data['active'],
            'user_id' => auth()->user()->id,
        ]);

        foreach ($data['translations'] as $key => $translation) {
            $slug = $translation['slug'] ?? Str::slug($translation['title']);

            $post->translations()->create([
                'title' => $translation['title'],
                'content' => $translation['content'],
                'slug' => $slug . '_' .$key,
                'meta_keywords' => $translation['meta_keywords'],
                'meta_description' => $translation['meta_description'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $post;
    }
}

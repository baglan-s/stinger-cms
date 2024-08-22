<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;

class ProductCategoryAdapter
{
    public static function adaptOneCCategory(array $category): array
    {
        return [
            'guid' => $category['groupGuid'],
            'parent_id' => $category['parentId'],
            'active' => !$category['markedForDeletion'],
            'group_id_1c' => $category['groupId']
        ];
    }

    public static function adaptOneCCategoryTranslation(array $category, string $languageId): array
    {
        return [
            'name' => $category['groupName'],
            'slug' => Str::slug($category['groupName']),
            'language_id' => $languageId
        ];
    }
}
<?php

namespace App\Helpers;

class CategoryHelper
{
    public static function getCategoriesTree(iterable $categories, $iteration = 0): array
    {
        $options = [];

        foreach ($categories as $category) {
            if (!$category->parent_id) {
                $options[$category->id] = $category->translation()?->name;
                $iteration = 0;
            } else {
                $options[$category->id] = ' ' . str_repeat('-', $iteration) . ' ' . $category->translation()?->name;
            }

            if ($category->children->count() > 0) {
                $iteration++;

                foreach ($category->children as $child) {
                    $options[$child->id] = ' ' . str_repeat('-', $iteration) . ' ' . $child->translation()?->name;

                    if ($child->children->count() > 0) {
                        $options = array_merge($options, self::getCategoriesTree($child->children, $iteration + 1));
                    }
                }
            }
        }

        return $options;
    }
}
<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\Brand;
use App\Models\Catalog\Product;

class ProductAdapter
{
    public static function adaptOneCProduct(array $product, ProductCategory $category, Brand $brand, Product $parent): array
    {
        return [
            'guid' => $product['guid'],
            'id_1c' => $product['id'] ?? null,
            'active' => $product['show'],
            'article' => $product['article'],
            'weight' => $product['weight'],
            'weight_unit' => $product['weightUnit'],
            'volume' => $product['volume'],
            'volume_unit' => $product['volumeUnit'],
            'product_category_id' => $category->id,
            'brand_id' => $brand->id,
            'parent_id' => $product['markdown'] ? $parent->id : null,
            'sort' => 0
        ];
    }

    public static function adaptOneCProductTranslation(array $product, string $languageId): array
    {
        return [
            'name' => $product['name'],
            'slug' => Str::slug($product['name']),
            'language_id' => $languageId,
        ];
    }
}
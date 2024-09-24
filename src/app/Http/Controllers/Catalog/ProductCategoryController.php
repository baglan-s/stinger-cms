<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog\ProductCategory;
use Illuminate\Http\Request;
use App\Services\ProductCategoryService;

class ProductCategoryController extends Controller
{
    public function __construct(
        private ProductCategoryService $productCategoryService,
    ) {}

    public function index()
    {
        $categories = $this->productCategoryService->getRepository()
            ->getWithChildren();
        $breadcrumbs = [
            ['title' => 'Главная', 'url' => '/'],
            ['title' => 'Каталог', 'url' => route('catalog.categories.index')],
        ];

        return view('pages.catalog.categories', compact('categories', 'breadcrumbs'));
    }

    public function show(string $slug)
    {
        $category = $this->productCategoryService->getRepository()
            ->getBySlug($slug);
        
        if (!$category) {
            abort(404);
        }

        if ($category->children->count() < 1) {
            return redirect()->route('catalog.products.index', ['category_id' => $category->id]);
        }

        $breadcrumbs = [
            ['title' => 'Главная', 'url' => '/'],
            ['title' => 'Каталог', 'url' => route('catalog.categories.index')],
        ];

        $breadcrumbs = $this->getCategoryBreadcrumbs($breadcrumbs, $category);

        return view('pages.catalog.category', compact('category', 'breadcrumbs'));
    }

    private function getCategoryBreadcrumbs(array $breadcrumbs, ProductCategory $category)
    {
        if ($category->parent) {
            if ($category->parent->parent) {
                $breadcrumbs = array_merge(
                    $breadcrumbs, 
                    $this->getCategoryBreadcrumbs($breadcrumbs, $category->parent->parent)
                );
            } else {
                $breadcrumbs[] = [
                    'title' => $category->parent->translation()?->name,
                    'url' => route('catalog.categories.show', $category->parent->translation()->slug),
                ];
            }
        }

        $breadcrumbs[] = [
            'title' => $category->translation()?->name,
            'url' => route('catalog.categories.show', $category->translation()->slug),
        ];

        return $breadcrumbs;
    }
}

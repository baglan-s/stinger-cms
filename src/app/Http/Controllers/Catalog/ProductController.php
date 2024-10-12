<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $productService,
    ) {}

    public function index(Request $request)
    {
        return view('pages.catalog.products', [
            'filter' => $request->all()
        ]);
    }

    public function show(string $slug)
    {
        $product = $this->productService->getRepository()
            ->model()
            ->whereHas('translations', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->with([
                'stocks' => function ($query) {
                    $query->whereHas('store', function ($query) {
                        $query->where('city_id', Cookie::get('city_id'))
                            ->orWhere('is_distributor', true);
                    });
                },
                'stocks.store',
                'stocks.store.city',
                'translations',
                'prices',
                'specifications',
                'specifications.productValues' => function ($query) {
                    $query->with(['translations' => function ($query) {
                        $query->wherehas('language', fn ($query) => $query->where('code', app()->getLocale()));
                    }]);
                },
                'brand'
            ])
            ->first();

        if (!$product) {
            abort(404);
        }

        $product->incrementView();

        return view('pages.catalog.product', [
            'product' => $product,
            'similarProducts' => $this->productService->getRepository()->similar($product->product_category_id)
        ]);
    }

    public function file(int $productId, int $fileId)
    {
        $product = $this->productService->getRepository()
            ->model()
            ->findOrFail($productId);
        $file = $product->files()
            ->where('id', $fileId)
            ->firstOrFail();

        return response()->file(storage_path('app/public/' . $file->path));
    }
}

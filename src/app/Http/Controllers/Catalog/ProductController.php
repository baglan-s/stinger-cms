<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;

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
        $product = $this->productService->getRepository()->findBySlug($slug);

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

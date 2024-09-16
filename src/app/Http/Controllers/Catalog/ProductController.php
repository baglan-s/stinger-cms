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
        return view('pages.catalog.products');
    }

    public function show(string $slug)
    {
        return view('pages.catalog.product', [
            'product' => $this->productService->getRepository()->findBySlug($slug),
        ]);
    }
}

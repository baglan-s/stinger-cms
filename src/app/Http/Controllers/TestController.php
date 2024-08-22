<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductCategoryService;
use App\Services\Integration\OneCApiService;

class TestController extends Controller
{
    public function __construct(
        protected OneCApiService $oneCApiService,
        protected ProductCategoryService $productCategoryService
    ) {}

    public function index($lang = null)
    {
        // print_r(json_encode($this->oneCApiService->prices()));
        // $this->productCategoryService->syncCategoriesWithOneC(
        //     $this->oneCApiService->categories()
        // );
    }
}

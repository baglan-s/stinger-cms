<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductCategoryService;
use App\Services\Integration\OneCApiService;
use App\Services\OrderService;
use App\Models\User;

class TestController extends Controller
{
    public function __construct(
        protected OneCApiService $oneCApiService,
        protected ProductCategoryService $productCategoryService,
        protected OrderService $orderService
    ) {}

    public function index($lang = null)
    {
        $user = User::first();
        $order = $user->orders()->with(['deliveryAddress', 'items', 'items.product', 'user'])->first();
        dd(
            $this->orderService->sendOrderToOneC($order)
        );
        // print_r(json_encode($this->oneCApiService->prices()));
        // $this->productCategoryService->syncCategoriesWithOneC(
        //     $this->oneCApiService->categories()
        // );
    }
}

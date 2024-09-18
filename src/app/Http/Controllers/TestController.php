<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductCategoryService;
use App\Services\Integration\OneCApiService;
use App\Services\OrderService;
use App\Services\ProductService;
use App\Models\User;
use App\Services\Integration\SmsService;

class TestController extends Controller
{
    public function __construct(
        protected OneCApiService $oneCApiService,
        protected ProductCategoryService $productCategoryService,
        protected OrderService $orderService,
        protected ProductService $productService,
    ) {}

    public function index($lang = null)
    {
        $product = $this->productService->getRepository()
            ->model()
            ->whereHas('prices')
            ->whereHas('prices.type', function ($query) {
                $query->where('id', '4');
            })
            ->with(['prices', 'prices.type'])
            ->first();

        dd($product);
        // $user = User::first();
        // $order = $user->orders()->with(['deliveryAddress', 'items', 'items.product', 'user'])->first();
        // dd(
        //     $this->orderService->sendOrderToOneC($order)
        // );
        // print_r(json_encode($this->oneCApiService->prices()));
        // $this->productCategoryService->syncCategoriesWithOneC(
        //     $this->oneCApiService->categories()
        // );
    }

    public function testSms()
    {
        $smsService = new SmsService();
        $res = $smsService->send();
        dd($res);
    }
}

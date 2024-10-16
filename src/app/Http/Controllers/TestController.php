<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductCategoryService;
use App\Services\Integration\OneCApiService;
use App\Services\OrderService;
use App\Services\ProductService;
use App\Models\User;
use App\Services\Integration\SmsService;
use App\Models\ServiceToken;

class TestController extends Controller
{
    public function __construct(
        protected OneCApiService $oneCApiService,
        protected ProductCategoryService $productCategoryService,
        protected OrderService $orderService,
        protected ProductService $productService,
        private SmsService $smsService
    ) {}

    public function index($lang = null)
    {
        $product = $this->productService->getRepository()
            ->model()
            ->whereHas('files')
            ->get();

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
        $phone = '+77024441143'; 
        $message = 'Hello world';
        // $res = $this->smsService->get_sms_cost($phone, $message);
        // $res = $this->smsService->get_balance();
        // $res = $this->smsService->send_sms($phone, $message);

        // $res = $this->smsService->send($phone, $message);
        // if ($res->successful()) {
        //     dd($res->body());
        // } else {
        //     dd(123);
        // }
    }
}

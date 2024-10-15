<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(
        private OrderService $orderService,
        private $perPage = 20
    ) {}
    public function userOrders(Request $request, $user_id)
    {
        $filter = $request->filter ?? [];
        $filter['user_id'] = $request->user()->id;

        return view('pages.catalog.orders.user', [
            'orders' => $this->orderService->getRepository()
                ->filter($filter)
                ->paginate($this->perPage),
        ]);
    }
}

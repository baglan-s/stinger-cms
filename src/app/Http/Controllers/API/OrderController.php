<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\API\OrderUpdateRequest;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(
        private OrderService $orderService,
    ) {}

    public function update(OrderUpdateRequest $request, $id)
    {
        $order = $this->orderService->getRepository()->find($id);

        if (!$order) {
            return response()->json(['error' => 'Заказ не найден'], 404);
        }

        $data = $request->validated();

        if ($request->has('order_status_guid')) {
            $status = $this->orderService->getStatusByGuid($request->get('order_status_guid'));

            if (!$status) {
                return response()->json(['error' => 'Статус заказа не найден'], 404);
            }

            $data['order_status_id'] = $status->id;
            unset($data['order_status_guid']);
        }

        $order->update($data);

        return response()->json([
            'message' => 'Заказ успешно изменен',
            'order' => $order,
        ]);
    }
}

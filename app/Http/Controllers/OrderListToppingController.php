<?php

namespace App\Http\Controllers;

use App\Models\OrderListTopping;
use Illuminate\Http\Request;

class OrderListToppingController extends Controller
{
    public function getAllOrderListTopping()
    {
        $response = [
            'status' => 'Success',
            'data' => OrderListTopping::all()
        ];
        
        return response($response, 200);
    }

    public function getOneOrderListTopping($id)
    {
        $orderListTopping = OrderListTopping::find($id);

        $response = [
            'status' => 'Success',
            'data' => $orderListTopping
        ];

        return response($response, 200);
    }

    public function createOrderListTopping(Request $request)
    {
        $validate = $request->validate([
            'order_list_id' => 'required',
            'topping_id' => 'required',
        ]);

        $orderListTopping = OrderListTopping::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderListTopping
        ];

        return response($response, 200);
    }

    public function updateOrderListTopping(Request $request, $id)
    {
        $orderListTopping = OrderListTopping::find($id);
        $orderListTopping->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderListTopping->get()
        ];
        
        return response($response, 200);
    }

    public function deleteOrderListTopping($id)
    {
        OrderListTopping::destroy($id);

        $response = [
            'status' => 'Success',
        ];

        return response($response, 200);
    }
}

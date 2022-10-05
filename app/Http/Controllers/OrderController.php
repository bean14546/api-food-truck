<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function getAllOrder()
    {
        $response = [
            'status' => 'Success',
            'data' => Order::all()
        ];
        
        return response($response, 200);
    }

    public function getOneOrder($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   Order::whereIn('Order_Id', [$id])->get()
        ];

        return response($response, 200);
    }

    public function createOrder(Request $request)
    {
        $validate = $request->validate([
            'Order_Price' => 'require',
            'order_status_id' => 'required',
            'user_id' => 'required',
            'coupon_id' => 'integer',
        ]);

        $order = Order::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $order
        ];
        
        return response($response, 200);
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $order->get()
        ];

        return response($response, 200);
    }

    public function deleteOrder($id)
    {
        Order::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

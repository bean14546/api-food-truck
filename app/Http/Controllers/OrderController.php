<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    
    public function getAllOrder()
    {
        $order = new OrderCollection(Order::all());
        
        $response = [
            'status' => 'Success',
            'data' => $order
        ];
        
        return response($response, 200);
    }

    public function getAndCountOrder()
    {
        $food = new OrderCollection(Order::paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $food->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneOrder(Order $id)
    {
        $order = new OrderResource($id);

        $response = [
            'status' => 'Success',
            'data' => $order
        ];

        return response($response, 200);
    }

    public function createOrder(Request $request)
    {
        $validate = $request->validate([
            'order_status_id' => 'required',
            'isTakeaway' => 'required',
            'user_id' => 'required',
            // 'Chef_Note' => 'string'
            // 'coupon_id' => 'integer',
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

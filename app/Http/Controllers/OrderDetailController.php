<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    public function getAllOrderDetail()
    {
        $response = [
            'status' => 'Success',
            'data' => OrderDetail::all()
        ];
        
        return response($response, 200);
    }

    public function getOneOrderDetail($id)
    {
        $orderDetail = OrderDetail::find($id);

        $response = [
            'status' => 'Success',
            'data' => $orderDetail
        ];

        return response($response, 200);
    }

    public function createOrderDetail(Request $request)
    {
        $validate = $request->validate([
            'Amount' => 'required',
            'Price' => 'required',
            'Note' => 'required',
            'order_id' => 'required',
            'food_id' => 'required',
            'option_id' => 'required',
            'topping_id' => 'required'
        ]);

        $orderDetail = OrderDetail::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderDetail
        ];

        return response($response, 200);
    }

    public function updateOrderDetail(Request $request, $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderDetail->get()
        ];
        
        return response($response, 200);
    }

    public function deleteOrderDetail($id)
    {
        OrderDetail::destroy($id);

        $response = [
            'status' => 'Success',
        ];

        return response($response, 200);
    }
}

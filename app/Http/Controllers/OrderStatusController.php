<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderStatus;
class OrderStatusController extends Controller
{
    public function getAllOrderStatus()
    {
        $response = [
            'status' => 'Success',
            'data' => OrderStatus::all()
        ];
        
        return response($response, 200);
    }

    public function getOneOrderStatus($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   OrderStatus::whereIn('Order_Status_Id', [$id])->get()
        ];

        return response($response, 200);
    }

    public function createOrderStatus(Request $request)
    {
        $validate = $request->validate([
            'Order_Status_Name' => 'required|string',
        ]);

        $orderStatus = OrderStatus::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderStatus
        ];
        
        return response($response, 200);
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $orderStatus = OrderStatus::find($id);
        $orderStatus->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderStatus->get()
        ];

        return response($response, 200);
    }

    public function deleteOrderStatus($id)
    {
        OrderStatus::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchOrderStatus(Request $request)
    {
        $orderStatus = OrderStatus::all();

        $keyword = $request->query('keyword');
        if ($keyword) {
            $orderStatus = OrderStatus::where('Order_Status_Name', 'like', '%' . $keyword . '%')->get();
        }
            
        $response = [
            'status' => 'Success',
            'data' => $orderStatus
        ];

        return response($response, 200);
    }
}

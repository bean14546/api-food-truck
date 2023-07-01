<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderListStatus;

class OrderListStatusController extends Controller
{
    public function getAllOrderListStatus()
    {
        $response = [
            'status' => 'Success',
            'data' => OrderListStatus::all()
        ];
        
        return response($response, 200);
    }
    
    public function getAndCountOrderListStatus()
    {
        $response = [
            'status' => 'Success',
            'result' => OrderListStatus::paginate(10)
        ];
        
        return response($response, 200);
    }

    public function getOneOrderListStatus($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   OrderListStatus::whereIn('Order_List_Status_Id', [$id])->get()
        ];

        return response($response, 200);
    }

    public function createOrderListStatus(Request $request)
    {
        $validate = $request->validate([
            'Order_List_Status_Name' => 'required|string',
        ]);

        $orderListStatus = OrderListStatus::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderListStatus
        ];
        
        return response($response, 200);
    }

    public function updateOrderListStatus(Request $request, $id)
    {
        $orderListStatus = OrderListStatus::find($id);
        $orderListStatus->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderListStatus->get()
        ];

        return response($response, 200);
    }

    public function deleteOrderListStatus($id)
    {
        OrderListStatus::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchOrderListStatus(Request $request)
    {
        $orderListStatus = OrderListStatus::all();

        $keyword = $request->query('keyword');
        if ($keyword) {
            $orderListStatus = OrderListStatus::where('Order_List_Status_Name', 'like', '%' . $keyword . '%')->paginate(10);
        }
            
        $response = [
            'status' => 'Success',
            'result' => $orderListStatus
        ];

        return response($response, 200);
    }
}

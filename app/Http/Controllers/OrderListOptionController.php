<?php

namespace App\Http\Controllers;

use App\Models\OrderListOption;
use Illuminate\Http\Request;

class OrderListOptionController extends Controller
{
    public function getAllOrderListOption()
    {
        $response = [
            'status' => 'Success',
            'data' => OrderListOption::all()
        ];
        
        return response($response, 200);
    }

    public function getOneOrderListOption($id)
    {
        $orderListOption = OrderListOption::find($id);

        $response = [
            'status' => 'Success',
            'data' => $orderListOption
        ];

        return response($response, 200);
    }

    public function createOrderListOption(Request $request)
    {
        $validate = $request->validate([
            'order_list_id' => 'required',
            'option_id' => 'required',
            'option_detail_id' => 'required'
        ]);

        $orderListOption = OrderListOption::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderListOption
        ];

        return response($response, 200);
    }

    public function updateOrderListOption(Request $request, $id)
    {
        $orderListOption = OrderListOption::find($id);
        $orderListOption->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderListOption->get()
        ];
        
        return response($response, 200);
    }

    public function deleteOrderListOption($id)
    {
        OrderListOption::destroy($id);

        $response = [
            'status' => 'Success',
        ];

        return response($response, 200);
    }
}

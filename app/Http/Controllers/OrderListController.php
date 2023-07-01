<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderList;
use App\Http\Resources\OrderListCollection;
use App\Http\Resources\OrderListResource;

class OrderListController extends Controller
{
    public function getAllOrderList()
    {  
        $orderList = new OrderListCollection(OrderList::all());
        
        $response = [
            'status' => 'Success',
            'data' => $orderList
        ];
        
        return response($response, 200);
    }

    public function getAndCountOrderList()
    {
        $orderList = new OrderListCollection(OrderList::paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $orderList->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getAndCountOrderListID1()
    {  
        $orderList = new OrderListCollection(OrderList::where('order_list_status_id', 1)->orderBy('id', 'asc')->paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $orderList->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getAndCountOrderListID2()
    {  
        $orderList = new OrderListCollection(OrderList::where('order_list_status_id', 2)->paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $orderList->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getAndCountOrderListID3()
    {  
        $orderList = new OrderListCollection(OrderList::where('order_list_status_id', 3)->paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $orderList->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getAndCountOrderListID4()
    {  
        $orderList = new OrderListCollection(OrderList::where('order_list_status_id', 4)->paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $orderList->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneOrderList(OrderList $id)
    {
        $orderList = new OrderListResource($id);

        $response = [
            'status' => 'Success',
            'data' => $orderList
        ];

        return response($response, 200);
    }

    public function createOrderList(Request $request)
    {
        $validate = $request->validate([
            'food_id' => 'required',
            'user_id' => 'required',
            'isTakeaway' => 'required',
            'order_list_status_id' => 'required',
            'Amount' => 'required',
            'Price' => 'required',
            'Note' => '',
            'Chef_Note' => '',
            'time_countdown_id' => '',
            // 'order_id' => 'required',
        ]);

        $orderList = OrderList::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderList
        ];

        return response($response, 200);
    }

    public function updateOrderList(Request $request, $id)
    {
        $orderList = OrderList::find($id);
        $orderList->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderList->get()
        ];

        return response($response, 200);
    }

    public function deleteOrderList($id)
    {
        OrderList::destroy($id);

        $response = [
            'status' => 'Success',
        ];

        return response($response, 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogDateStockCollection;
use App\Http\Resources\LogDateStockResource;
use Illuminate\Http\Request;
use App\Models\LogDateStock;
class LogDateStockController extends Controller
{
    
    public function getAllLogDateStock()
    {
        $LogDateStock = new LogDateStockCollection(LogDateStock::all());
        
        $response = [
            'status' => 'Success',
            'data' => $LogDateStock
        ];
        
        return response($response, 200);
    }

    public function getOneLogDateStock(LogDateStock $id)
    {
        $LogDateStock = new LogDateStockResource($id);

        $response = [
            'status' => 'Success',
            'data' => $LogDateStock
        ];

        return response($response, 200);
    }

    public function createLogDateStock(Request $request)
    {
        $validate = $request->validate([
            'ingredient_id' => 'required',
            'stock_date_id' => 'required',
            'quantity' => ''
        ]);

        $LogDateStock = LogDateStock::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $LogDateStock
        ];
        
        return response($response, 200);
    }

    public function updateLogDateStock(Request $request, $id)
    {
        $LogDateStock = LogDateStock::find($id);
        $LogDateStock->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $LogDateStock->get()
        ];

        return response($response, 200);
    }

    public function deleteLogDateStock($id)
    {
        LogDateStock::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

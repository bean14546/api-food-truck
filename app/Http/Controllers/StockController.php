<?php

namespace App\Http\Controllers;

use App\Http\Resources\StockCollection;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function getAllStock()
    {
        $stock = new StockCollection(Stock::all());
        
        $response = [
            'status' => 'Success',
            'data' => $stock
        ];
        
        return response($response, 200);
    }

    public function getAndCountStock()
    {
        $stock = new StockCollection(Stock::paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $stock->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneStock(Stock $id)
    {
        
        $Stock = new StockResource($id);

        $response = [
            'status' => 'Success',
            'data' =>   $Stock
        ];

        return response($response, 200);
    }

    public function createStock(Request $request)
    {
        $validate = $request->validate([
            'quantity' => 'required'
        ]);
        // $quantity = $request->input('quantity') ?? 0;
        $Stock = Stock::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $Stock
        ];
        
        return response($response, 200);
    }

    public function updateStock(Request $request, $id)
    {
        $Stock = Stock::find($id);
        $Stock->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $Stock->get()
        ];

        return response($response, 200);
    }

    public function deleteStock($id)
    {
        Stock::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

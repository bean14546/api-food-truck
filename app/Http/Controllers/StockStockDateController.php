<?php

namespace App\Http\Controllers;

use App\Models\StockDate;
use Illuminate\Http\Request;

class StockDateController extends Controller
{
    public function getAllStockDate()
    {
        $response = [
            'status' => 'Success',
            'data' => StockDate::all()
        ];
        
        return response($response, 200);
    }

    public function getOneStockDate(StockDate $id)
    {
        $StockDate = StockDate::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $StockDate
        ];

        return response($response, 200);
    }

    public function createStockDate(Request $request)
    {
        $validate = $request->validate([
            'date' => 'required'
        ]);

        $StockDate = StockDate::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $StockDate
        ];
        
        return response($response, 200);
    }

    public function updateStockDate(Request $request, $id)
    {
        $StockDate = StockDate::find($id);
        $StockDate->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $StockDate->get()
        ];

        return response($response, 200);
    }

    public function deleteStockDate($id)
    {
        StockDate::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchStockDate(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $StockDate = StockDate::where('date', 'like', '%' . $keyword . '%')->get();
        }
            
        $response = [
            'status' => 'Success',
            'data' => $StockDate
        ];

        return response($response, 200);
    }
}

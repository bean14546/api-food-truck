<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodStatus;

class FoodStatusController extends Controller
{
    public function getAllFoodStatus()
    {
        $response = [
            'status' => 'Success',
            'data' => FoodStatus::all()
        ];
        
        return response($response, 200);
    }

    public function getOneFoodStatus(FoodStatus $id)
    {
        $foodStatus = FoodStatus::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $foodStatus
        ];

        return response($response, 200);
    }

    public function createFoodStatus(Request $request)
    {
        $validate = $request->validate([
            'Food_Status_Name' => 'required|string|max:100'
        ]);

        $foodStatus = FoodStatus::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $foodStatus
        ];
        
        return response($response, 200);
    }

    public function updateFoodStatus(Request $request, $id)
    {
        $foodStatus = FoodStatus::find($id);
        $foodStatus->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $foodStatus->get()
        ];

        return response($response, 200);
    }

    public function deleteFoodStatus($id)
    {
        FoodStatus::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchFoodStatus(Request $request)
    {
        $foodStatus = FoodStatus::all();

        $keyword = $request->query('keyword');
        if ($keyword) {
            $foodStatus = FoodStatus::where('Food_Status_Name', 'like', '%' . $keyword . '%')->get();
        }
            
        $response = [
            'status' => 'Success',
            'data' => $foodStatus
        ];

        return response($response, 200);
    }
}

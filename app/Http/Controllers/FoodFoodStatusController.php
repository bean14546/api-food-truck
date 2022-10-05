<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodFoodStatus;

class FoodFoodStatusController extends Controller
{
    public function getAllFoodFoodStatus()
    {
        $response = [
            'status' => 'Success',
            'data' => FoodFoodStatus::all()
        ];
        
        return response($response, 200);
    }

    public function getOneFoodFoodStatus($id)
    {
        $foodFoodStatus = FoodFoodStatus::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $foodFoodStatus
        ];

        return response($response, 200);
    }

    public function createFoodFoodStatus(Request $request)
    {
        $validate = $request->validate([
            'food_id' => 'required',
            'food_status_id' => 'required',
        ]);

        $foodFoodStatus = FoodFoodStatus::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $foodFoodStatus
        ];

        return response($response, 200);
    }

    public function updateFoodFoodStatus(Request $request, $id)
    {
        $foodFoodStatus = FoodFoodStatus::find($id);
        $foodFoodStatus->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $foodFoodStatus->get()
        ];

        return response($response, 200);
    }

    public function deleteFoodFoodStatus($id)
    {
        FoodFoodStatus::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

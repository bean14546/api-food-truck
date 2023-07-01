<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodTopping;

class FoodToppingController extends Controller
{
    public function getAllFoodTopping()
    {
        $response = [
            'status' => 'Success',
            'data' => FoodTopping::all()
        ];
        
        return response($response, 200);
    }

    public function getOneFoodTopping($id)
    {
        $foodOption = FoodTopping::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $foodOption
        ];

        return response($response, 200);
    }

    public function createFoodTopping(Request $request)
    {
        $validate = $request->validate([
            'food_id' => 'required',
            'topping_id' => 'required',
        ]);

        $foodOption = FoodTopping::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $foodOption
        ];

        return response($response, 200);
    }

    public function updateFoodTopping(Request $request, $id)
    {
        $foodOption = FoodTopping::find($id);
        $foodOption->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $foodOption->get()
        ];

        return response($response, 200);
    }

    public function deleteFoodTopping($id)
    {
        FoodTopping::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

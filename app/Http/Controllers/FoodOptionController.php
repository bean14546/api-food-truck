<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodOption;

class FoodOptionController extends Controller
{
    public function getAllFoodOption()
    {
        $response = [
            'status' => 'Success',
            'data' => FoodOption::all()
        ];
        
        return response($response, 200);
    }

    public function getOneFoodOption($id)
    {
        $foodOption = FoodOption::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $foodOption
        ];

        return response($response, 200);
    }

    public function createFoodOption(Request $request)
    {
        $validate = $request->validate([
            'food_id' => 'required',
            'option_id' => 'required',
        ]);

        $foodOption = FoodOption::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $foodOption
        ];

        return response($response, 200);
    }

    public function updateFoodOption(Request $request, $id)
    {
        $foodOption = FoodOption::find($id);
        $foodOption->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $foodOption->get()
        ];

        return response($response, 200);
    }

    public function deleteFoodOption($id)
    {
        FoodOption::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

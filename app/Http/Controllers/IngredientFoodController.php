<?php

namespace App\Http\Controllers;

use App\Models\IngredientFood;
use Illuminate\Http\Request;

class IngredientFoodController extends Controller
{
    public function getAllIngredientFood()
    {
        $response = [
            'status' => 'Success',
            'data' => IngredientFood::all()
        ];
        
        return response($response, 200);
    }

    public function getOneIngredientFood(IngredientFood $id)
    {
        $IngredientFood = IngredientFood::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $IngredientFood
        ];

        return response($response, 200);
    }

    public function createIngredientFood(Request $request)
    {
        $validate = $request->validate([
            'ingredient_id' => 'required',
            'food_id' => 'required',
            'amount_used' => 'required'
        ]);

        $IngredientFood = IngredientFood::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $IngredientFood
        ];
        
        return response($response, 200);
    }

    public function updateIngredientFood(Request $request, $id)
    {
        $IngredientFood = IngredientFood::find($id);
        $IngredientFood->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $IngredientFood->get()
        ];

        return response($response, 200);
    }

    public function deleteIngredientFood($id)
    {
        IngredientFood::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}
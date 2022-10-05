<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Http\Resources\FoodCollection;
use App\Http\Resources\FoodResource;
class FoodController extends Controller
{
    public function getAllFood()
    {
        $food = new FoodCollection(Food::all());
        
        $response = [
            'status' => 'Success',
            'data' => $food
        ];
        
        return response($response, 200);
    }

    public function getOneFood(Food $id)
    {
        $food = new FoodResource($id);

        $response = [
            'status' => 'Success',
            'data' => $food
        ];

        return response($response, 200);
    }

    public function createFood(Request $request)
    {
        $validate = $request->validate([
            'Food_Name' => 'required|string|max:100',
            'Food_Price' => 'required',
            'Food_Description' => 'string',
            'Food_Image' => 'string'
        ]);

        $food = Food::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $food
        ];
        
        return response($response, 200);
    }

    public function updateFood(Request $request, $id)
    {
        $food = Food::find($id);
        $food->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $food->get()
        ];
        
        return response($response, 200);
    }

    public function deleteFood($id)
    {
        Food::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchFood(Request $request)
    {
        $food = new FoodCollection(Food::all());

        $keyword = $request->query('keyword');
        if ($keyword) {
            $food = Food::where('Food_Name', 'like', '%' . $keyword . '%')
                ->orWhere('Food_Price', 'like', '%' . $keyword . '%')
                ->get();
        }
            
        $response = [
            'status' => 'Success',
            'data' => $food
        ];

        return response($response, 200);
        
    }
}

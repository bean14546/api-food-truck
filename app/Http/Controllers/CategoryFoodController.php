<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryFood;

class CategoryFoodController extends Controller
{
    public function getAllCategoryFood()
    {
        $response = [
            'status' => 'Success',
            'data' => CategoryFood::all()
        ];
        
        return response($response, 200);
    }

    public function getOneCategoryFood($id)
    {
        $categoryFood = CategoryFood::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $categoryFood
        ];

        return response($response, 200);
    }

    public function createCategoryFood(Request $request)
    {
        $validate = $request->validate([
            'food_id' => 'required',
            'category_id' => 'required',
        ]);

        $categoryFood = CategoryFood::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $categoryFood
        ];
        
        return response($response, 200);
    }

    public function updateCategoryFood(Request $request, $id)
    {
        $categoryFood = CategoryFood::find($id);
        $categoryFood->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $categoryFood->get()
        ];

        return response($response, 200);
    }

    public function deleteCategoryFood($id)
    {
        CategoryFood::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }
}

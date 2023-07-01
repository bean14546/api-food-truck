<?php

namespace App\Http\Controllers;

use App\Http\Resources\IngredientCollection;
use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function getAllIngredient()
    {
        $ingredient = new IngredientCollection(Ingredient::all());
        
        $response = [
            'status' => 'Success',
            'data' => $ingredient
        ];
        
        return response($response, 200);
    }

    public function getAndCountIngredient()
    {
        $ingredient = new IngredientCollection(Ingredient::paginate(10));
        $response = [
            'status' => 'Success',
            'result' => $ingredient->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneIngredient(Ingredient $id)
    {
        $Ingredient = new IngredientResource($id);

        $response = [
            'status' => 'Success',
            'data' =>   $Ingredient
        ];

        return response($response, 200);
    }

    public function createIngredient(Request $request)
    {
        $validate = $request->validate([
            'ingredient' => 'required|string|max:100',
            'cost' => 'required',
            'stock_id' => 'required',
            'ingredient_group_id' => 'required',
            'ingredient_unit_id' => 'required'
        ]);

        $Ingredient = Ingredient::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $Ingredient
        ];
        
        return response($response, 200);
    }

    public function updateIngredient(Request $request, $id)
    {
        $Ingredient = Ingredient::find($id);
        $Ingredient->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $Ingredient->get()
        ];

        return response($response, 200);
    }

    public function deleteIngredient($id)
    {
        Ingredient::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchIngredient(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $ingredient = new IngredientCollection(Ingredient::where('ingredient', 'like', '%' . $keyword . '%')->paginate(10));
        }
            
        $response = [
            'status' => 'Success',
            'result' => $ingredient->response()->getData(true)
        ];

        return response($response, 200);
    }
}

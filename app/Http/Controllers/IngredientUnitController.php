<?php

namespace App\Http\Controllers;

use App\Models\IngredientUnit;
use Illuminate\Http\Request;

class IngredientUnitController extends Controller
{
    public function getAllIngredientUnit()
    {
        $ingredientUnit = IngredientUnit::all();

        $response = [
            'status' => 'Success',
            'data' => $ingredientUnit
        ];
        
        return response($response, 200);
    }

    public function getAndCountIngredientUnit()
    {
        $ingredientUnit = IngredientUnit::paginate(10);

        $response = [
            'status' => 'Success',
            'result' => $ingredientUnit
        ];
        
        return response($response, 200);
    }

    public function getOneIngredientUnit(IngredientUnit $id)
    {
        $IngredientUnit = IngredientUnit::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $IngredientUnit
        ];

        return response($response, 200);
    }

    public function createIngredientUnit(Request $request)
    {
        $validate = $request->validate([
            'unit' => 'required|string|max:100'
        ]);

        $IngredientUnit = IngredientUnit::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $IngredientUnit
        ];
        
        return response($response, 200);
    }

    public function updateIngredientUnit(Request $request, $id)
    {
        $IngredientUnit = IngredientUnit::find($id);
        $IngredientUnit->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $IngredientUnit->get()
        ];

        return response($response, 200);
    }

    public function deleteIngredientUnit($id)
    {
        IngredientUnit::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchIngredientUnit(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $IngredientUnit = IngredientUnit::where('unit', 'like', '%' . $keyword . '%')->paginate(10);
        }
            
        $response = [
            'status' => 'Success',
            'result' => $IngredientUnit
        ];

        return response($response, 200);
    }
}

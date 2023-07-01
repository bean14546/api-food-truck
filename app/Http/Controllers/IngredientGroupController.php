<?php

namespace App\Http\Controllers;

use App\Models\IngredientGroup;
use Illuminate\Http\Request;

class IngredientGroupController extends Controller
{
    public function getAllIngredientGroup()
    {
        $response = [
            'status' => 'Success',
            'data' => IngredientGroup::all()
        ];
        
        return response($response, 200);
    }

    public function getAndCountIngredientGroup()
    {
        $response = [
            'status' => 'Success',
            'result' => IngredientGroup::paginate(10)
        ];
        
        return response($response, 200);
    }

    public function getOneIngredientGroup(IngredientGroup $id)
    {
        $IngredientGroup = IngredientGroup::find($id);

        $response = [
            'status' => 'Success',
            'data' =>   $IngredientGroup
        ];

        return response($response, 200);
    }

    public function createIngredientGroup(Request $request)
    {
        $validate = $request->validate([
            'ingredientGroup' => 'required|string|max:100'
        ]);

        $IngredientGroup = IngredientGroup::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $IngredientGroup
        ];
        
        return response($response, 200);
    }

    public function updateIngredientGroup(Request $request, $id)
    {
        $IngredientGroup = IngredientGroup::find($id);
        $IngredientGroup->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $IngredientGroup->get()
        ];

        return response($response, 200);
    }

    public function deleteIngredientGroup($id)
    {
        IngredientGroup::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchIngredientGroup(Request $request)
    {

        $keyword = $request->query('keyword');
        if ($keyword) {
            $IngredientGroup = IngredientGroup::where('ingredientGroup', 'like', '%' . $keyword . '%')->paginate(10);
        }
            
        $response = [
            'status' => 'Success',
            'result' => $IngredientGroup
        ];

        return response($response, 200);
    }
}

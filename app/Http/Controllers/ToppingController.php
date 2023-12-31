<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topping;
class ToppingController extends Controller
{
    public function getAllTopping()
    {
        $stock = Topping::all();
        
        $response = [
            'status' => 'Success',
            'data' => $stock
        ];
        
        return response($response, 200);
    }

    public function getAndCountTopping()
    {
        $topping = Topping::paginate(10);

        $response = [
            'status' => 'Success',
            'result' => $topping
        ];
        
        return response($response, 200);

    }

    public function getOneTopping($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   Topping::whereIn('id', [$id])->first()
        ];

        return response($response, 200);
    }

    public function createTopping(Request $request)
    {
        $validate = $request->validate([
            'Topping_Name' => 'required|string',
            'Topping_Price' => 'required',
            'isActive' => 'required',
        ]);

        $topping = Topping::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $topping
        ];
        
        return response($response, 200);
    }

    public function updateTopping(Request $request, $id)
    {
        $topping = Topping::find($id);
        $topping->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $topping->get()
        ];

        return response($response, 200);
    }

    public function deleteTopping($id)
    {
        Topping::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchTopping(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $topping = Topping::where('Topping_Name', 'like', '%' . $keyword . '%')
                    ->orWhere('Topping_Price', 'like', '%' . $keyword . '%')    
                    ->paginate(10);
        }
            
        $response = [
            'status' => 'Success',
            'result' => $topping
        ];

        return response($response, 200);
    }
}

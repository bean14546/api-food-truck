<?php

namespace App\Http\Controllers;

use App\Http\Resources\OptionResource;
use App\Http\Resources\OptionCollection;
use Illuminate\Http\Request;
use App\Models\Option;
class OptionController extends Controller
{
    public function getAllOption()
    {
        $option = new OptionCollection(Option::all());
        
        $response = [
            'status' => 'Success',
            'data' => $option
        ];
        
        return response($response, 200);
    }

    public function getAndCountOption()
    {
        $option = new OptionCollection(Option::paginate(10));

        $response = [
            'status' => 'Success',
            'result' => $option->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneOption(Option $id)
    {
        $option = new OptionResource($id);

        $response = [
            'status' => 'Success',
            'data' =>   $option
        ];

        return response($response, 200);
    }

    public function createOption(Request $request)
    {
        $validate = $request->validate([
            'Option_Name' => 'required|string|max:100'
        ]);

        $option = Option::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $option
        ];
        
        return response($response, 200);
    }

    public function updateOption(Request $request, $id)
    {
        $option = Option::find($id);
        $option->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $option->get()
        ];

        return response($response, 200);
    }

    public function deleteOption($id)
    {
        Option::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchOption(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $option = new OptionCollection(Option::where('Option_Name', 'like', '%' . $keyword . '%')->paginate(10));
        }
        $response = [
            'status' => 'Success',
            'result' => $option->response()->getData(true)
        ];

        return response($response, 200);
    }
}

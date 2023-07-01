<?php

namespace App\Http\Controllers;

use App\Http\Resources\OptionDetailCollection;
use App\Http\Resources\OptionDetailResource;
use Illuminate\Http\Request;
use App\Models\OptionDetail;

class OptionDetailController extends Controller
{
    public function getAllOptionDetail()
    {
        $optionDetail = new OptionDetailCollection(OptionDetail::all());
        
        $response = [
            'status' => 'Success',
            'data' => $optionDetail
        ];
        
        return response($response, 200);
    }

    public function getAndCountOptionDetail()
    {
        $optionDetail = new OptionDetailCollection(OptionDetail::paginate(10));
        $response = [
            'status' => 'Success',
            'result' => $optionDetail->response()->getData(true)
        ];
        
        return response($response, 200);
    }

    public function getOneOptionDetail(OptionDetail $id)
    {
        $optionDetail = new OptionDetailResource($id);

        $response = [
            'status' => 'Success',
            'data' =>  $optionDetail
        ];

        return response($response, 200);
    }

    public function createOptionDetail(Request $request)
    {
        $validate = $request->validate([
            'Option_Detail_Name' => 'required|string|max:100',
            'Option_Detail_Price' => 'required',
            'isActive' => 'required',
            'option_id' => 'required',
        ]);

        $optionDetail = OptionDetail::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $optionDetail
        ];
        
        return response($response, 200);
    }

    public function updateOptionDetail(Request $request, $id)
    {
        $optionDetail = OptionDetail::find($id);
        $optionDetail->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $optionDetail->get()
        ];

        return response($response, 200);
    }

    public function deleteOptionDetail($id)
    {
        OptionDetail::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchOptionDetail(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $optionDetail = new OptionDetailCollection(OptionDetail::where('Option_Detail_Name', 'like', '%' . $keyword . '%')->paginate());
        }
        $response = [
            'status' => 'Success',
            'result' => $optionDetail->response()->getData(true)
        ];

        return response($response, 200);
    }
}


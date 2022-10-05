<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OptionDetail;

class OptionDetailController extends Controller
{
    public function getAllOptionDetail()
    {
        $response = [
            'status' => 'Success',
            'data' => OptionDetail::all()
        ];
        
        return response($response, 200);
    }

    public function getOneOptionDetail($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   OptionDetail::whereIn('Option_List_Id', [$id])->get()
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
}


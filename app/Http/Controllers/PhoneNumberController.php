<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneNumber;
class PhoneNumberController extends Controller
{
    public function getAllPhoneNumber()
    {
        $response = [
            'status' => 'Success',
            'data' => PhoneNumber::all()
        ];
        
        return response($response, 200);
    }

    public function getOnePhoneNumber($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   PhoneNumber::whereIn('id', [$id])->get()
        ];

        return response($response, 200);
    }

    public function createPhoneNumber(Request $request)
    {
        $validate = $request->validate([
            'Phone_Number' => 'required|string',
            'user_id' => 'required',
        ]);

        $phoneNumber = PhoneNumber::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $phoneNumber
        ];
        
        return response($response, 200);
    }

    public function updatePhoneNumber(Request $request, $id)
    {
        $phoneNumber = PhoneNumber::find($id);
        
        $phoneNumber->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $phoneNumber->get()
        ];

        return response($response, 200);//
    }

    public function deletePhoneNumber($id)
    {
        PhoneNumber::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchPhoneNumber(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $phoneNumber = PhoneNumber::where('Phone_Number', 'like', '%' . $keyword . '%')->get();
        }
            
        $response = [
            'status' => 'Success',
            'data' => $phoneNumber
        ];

        return response($response, 200);
    }
}

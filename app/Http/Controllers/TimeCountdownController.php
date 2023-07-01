<?php

namespace App\Http\Controllers;

use App\Models\TimeCountdown;
use Illuminate\Http\Request;

class TimeCountdownController extends Controller
{
    public function getAllCountdown()
    {
        $response = [
            'status' => 'Success',
            'data' => TimeCountdown::all()
        ];
        
        return response($response, 200);
    }
    
    public function getAndCountCountdown()
    {
        $orderStatus = TimeCountdown::paginate(10);
        
        $response = [
            'status' => 'Success',
            'result' => $orderStatus
        ];
        
        return response($response, 200);
    }


    public function getOneCountdown($id)
    {
        $response = [
            'status' => 'Success',
            'data' =>   TimeCountdown::whereIn('time', [$id])->get()
        ];

        return response($response, 200);
    }

    public function createCountdown(Request $request)
    {
        $validate = $request->validate([
            'time' => 'required',
        ]);

        $orderStatus = TimeCountdown::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $orderStatus
        ];
        
        return response($response, 200);
    }

    public function updateCountdown(Request $request, $id)
    {
        $orderStatus = TimeCountdown::find($id);
        $orderStatus->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $orderStatus->get()
        ];

        return response($response, 200);
    }

    public function deleteCountdown($id)
    {
        TimeCountdown::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchCountdown(Request $request)
    {
        $orderStatus = TimeCountdown::all();

        $keyword = $request->query('keyword');
        if ($keyword) {
            $orderStatus = TimeCountdown::where('time', 'like', '%' . $keyword . '%')->paginate(10);
        }
            
        $response = [
            'status' => 'Success',
            'result' => $orderStatus
        ];

        return response($response, 200);
    }
}

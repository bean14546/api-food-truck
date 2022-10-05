<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyCoupon;
class MyCouponController extends Controller
{
    public function getAllMyCoupon()
    {
        $response = [
            'status' => 'Success',
            'data' => MyCoupon::all()
        ];
        
        return response($response, 200);
    }

    public function getOneMyCoupon($id)
    {
        $myCoupon = MyCoupon::find($id);

        $response = [
            'status' => 'Success',
            'data' => $myCoupon
        ];

        return response($response, 200);
    }

    public function createMyCoupon(Request $request)
    {
        $validate = $request->validate([
            'isActive',
            'coupon_id',
            'user_id'
        ]);

        $myCoupon = MyCoupon::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $myCoupon
        ];

        return response($response, 200);
    }

    public function updateMyCoupon(Request $request, $id)
    {
        $myCoupon = MyCoupon::find($id);
        $myCoupon->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $myCoupon->get()
        ];
        
        return response($response, 200);
    }

    public function deleteMyCoupon($id)
    {
        MyCoupon::destroy($id);

        $response = [
            'status' => 'Success',
        ];

        return response($response, 200);
    }
}

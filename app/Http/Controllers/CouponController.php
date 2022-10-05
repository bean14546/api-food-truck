<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
class CouponController extends Controller
{
    public function getAllCoupon()
    {
        $response = [
            'status' => 'Success',
            'data' => Coupon::all()
        ];
        
        return response($response, 200);
    }

    public function getOneCoupon($id)
    {
        $coupon = Coupon::find($id);
        
        $response = [
            'status' => 'Success',
            'data' => $coupon
        ];

        return response($response, 200);
    }

    public function createCoupon(Request $request)
    {
        $validate = $request->validate([
            'Coupon_Discount' => 'required',
            'Coupon_Name' => 'required|string|max:100',
            'Coupon_Description' => 'string',
            'Coupon_Quantity' => 'required',
            'Coupon_Maximum_Use' => 'required',
            'Coupon_Start_Date' => 'required',
            'Coupon_End_Date' => 'required'
        ]);

        $coupon = Coupon::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $coupon
        ];
        
        return response($response, 200);
    }

    public function updateCoupon(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $coupon->get()
        ];

        return response($response, 200);
    }

    public function deleteCoupon($id)
    {
        Coupon::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchCoupon(Request $request)
    {   
        $coupon = Coupon::all();

        $keyword = $request->query('keyword');
        if ($keyword) {
            $coupon = Coupon::where('Coupon_Discount', 'like', '%' . $keyword . '%')
                ->orWhere('Coupon_Name','like', '%' . $keyword . '%')
                ->get();
        }
        
        $response = [
            'status' => 'Success',
            'data' => $coupon
        ];

        return response($response, 200);
    }
}

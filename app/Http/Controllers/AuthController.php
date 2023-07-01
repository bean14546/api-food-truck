<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    public function login(Request $request){
        $validate = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:4'
        ]);
        // ตรวจสอบ User ที่  login เข้ามาว่ามี user นี้ใน Database หรือไม่
        $user = Admin::where('username', $validate['username'])->first();

        // ตรวจสอบเงื่อนไขการ Login
        if (!$user || !Hash::check($validate['password'], $user->password)) {
            $response = [
                'message' => 'Email or Password incorrect'
            ];
            return response($response,401);
        } else {
            // ลบ Token เก่าที่ค้างอยู่
            $user->tokens()->delete();

            // สร้าง Token ใหม่
            // userAgent() คือ method ที่ใช้สำหรับดึง Browser ว่ายิง API มาจาก Browser ไหน
            $token = $user->createToken($request->userAgent())->plainTextToken;
            
            $response = [
                'user' => $user,
                'token' => $token,
                'status' => 'Success'
            ];
            return response($response, 200);
        }
    }

    public function register(Request $request){
        $validate = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:4'
        ]);
        
        $user = Admin::create([
            'username' => $validate['username'],
            'password' => bcrypt($validate['password']),
        ]);

        $response = [
            'status' => 'Register Success',
            'data' => $user
        ];

        return response($response, 200);
    }

    public function logout(Request $request){
        // $request->user()->currentAccessToken()->delete();
        $request->user()->currentAccessToken();
        
        $response = [
            'status' => 'Logout Success',
            'data' => $request
        ];
        return response($response, 200);
    }
}

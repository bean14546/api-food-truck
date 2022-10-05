<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'User_First_Name' => 'required|string|max:100',
            'User_Last_Name' => 'required|string|max:100',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'User_First_Name' => $validate['User_First_Name'],
            'User_Last_Name' => $validate['User_Last_Name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
        ]);

        $token = $user->createToken($request->userAgent())->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
            'status' => 'Success'
        ];

        return response($response,200);
    }
    
    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ]);
        // ตรวจสอบ User ที่  login เข้ามาว่ามี user นี้ใน Database หรือไม่
        $user = User::where('email', $validate['email'])->first();

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
            return response($response,200);
        }
    }

    public function logout(Request $request){
        
        $request->user()->currentAccessToken()->delete();
        
        $response = [
            'status' => 'Success'
        ];
        return response($response,200);
    }
}

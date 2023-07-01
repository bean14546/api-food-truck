<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;

// use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function getAllUser()
    {
        $user = new UserCollection(User::all());

        $response = [
            'status' => 'Success',
            'data' => $user
        ];
        
        return response($response, 200);
    }

    public function getOneUser(User $id)
    {
        $user = new UserResource($id);

        $response = [
            'status' => 'Success',
            'data' => $user
        ];

        return response($response, 200);
    }

    public function createUser(Request $request)
    {
        $validate = $request->validate([
            'username' => 'string|required',
        ]);

        $user = User::create($validate);

        $response = [
            'status' => 'Success',
            'data' => $user
        ];

        return response($response, 200);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        $response = [
            'status' => 'Success',
            'data' => $user->get()
        ];

        return response($response, 200);
    }

    public function deleteUser($id)
    {
        User::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchUser(Request $request)
    {
        $user = new UserCollection(User::all());

        $keyword = $request->query('keyword');
        if ($keyword) {
            $user = User::where('username', 'like', '%' . $keyword . '%')->get();
        }
            
        $response = [
            'status' => 'Success',
            'data' => $user
        ];

        return response($response, 200);
    }
}

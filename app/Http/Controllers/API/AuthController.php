<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $login_data = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($login_data)){
            $user = Auth::user();
            $token = $user->createToken("Library")->accessToken;
            return response(["status" => "success", "accessToken" => $token]);
        }
        return response([
            "status" => "error",
            "message" => "Invalid credentials"
        ]);
    }

    public function register(Request $request){
        $rules = [
            "name" => "required",
            "phone_number" => "required|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ];

        $messages = [
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response(["status" => 'error', "errors" => $validator->errors() ]);
        }


        $user = User::create([
            "email" => $request->email,
            "name" => $request->name,
            "phone_number" => $request->phone_number,
            "password" => Hash::make($request->password)
        ]);


        return response([
            "status" => "success",
            "message" => "User created successfully.",
            "data" => $user
        ]);
    }
}

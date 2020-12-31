<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        if(Auth::check()){
            return redirect()->route('dashboard.home');
        }
        return view('auth.register');
    }

    public function do_register(Request $request){
        $request->validate([
            "name" => "required",
            "phone_number" => "required|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ]);
        User::create([
            "email" => $request->email,
            "name" => $request->name,
            "phone_number" => $request->phone_number,
            "password" => Hash::make($request->password)
        ]);

        $login_data = [
            "email" => $request->email,
            "password" => $request->password
        ];

        return redirect()->route(Auth::attempt($login_data) ? "dashboard.home" : "login")->with("success", "User created successfully");
    }

    public function login(){
        if(Auth::check()){
            return redirect()->route('dashboard.home');
        }
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $login_data = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($login_data)){
            return redirect()->route("dashboard.home");
        }
        return redirect()->back()->with("error", "Invalid data");

    }

    public function logout(){
        if (Auth::check()){
            Auth::logout();
        }

        return redirect()->route('login')->with("success", "User logged out successfully");
    }
}

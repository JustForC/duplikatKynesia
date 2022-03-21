<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function register()
    {
        return view('authentication.registration');
    }

    public function doLogin(Request $request)
    {
        $credentials=[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard()->attempt($credentials)){
            if(Auth::user()->role == 0){
                return redirect()->route('user.homepage');
            }
        }

        return redirect()->back();
    }

    public function doRegister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0,
            'statusOne' => "Proses Pendaftaran",
        ]);

        return redirect()->route('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}

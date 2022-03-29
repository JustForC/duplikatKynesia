<?php

namespace App\Http\Controllers;

use App\Models\NotifAdmin;
use App\Models\User;
use App\Notifications\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard()->attempt($credentials)) {
            if (Auth::user()->role == 0) {
                return redirect()->route('user.homepage');
            } elseif (Auth::user()->role == 1) {
                return redirect()->route('admin.homepage');
            }
        }

        return redirect()->back();
    }

    public function doRegister(Request $request)
    {
        $message =
            [
            'name.required' => "Nama Tidak Boleh Kosong",
            'email.required' => "Email Tidak Boleh Kosong",
            'email.unique' => "Email Sudah Terpakai",
            'password.required' => "Password Harus Diisi",
            'password.min' => "Password Minimal 8 Karakter",
            'password.confirmed' => "Konfirmasi Password Salah",
        ];

        $validator = Validator::make($request->all(), [
            'name' => ('required'),
            'email' => ('required|unique:users'),
            'password' => ('required|string|min:8|confirmed'),
        ], $message);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0,
            'statusOne' => "Proses Pendaftaran",
        ]);

        $content = "User dengan nama " . $user->name . " dengan email " . $user->email . " telah membuat akun.";

        NotifAdmin::create([
            'content' => $content,
            'status' => 0,
        ]);

        $insideMail = [
            'lineOne' => 'Hai ' . $user->name,
            'lineTwo' => 'Anda Sudah Berhasil Mendaftar Akun Untuk Kynesia',
            'lineThree' => 'Silahkan Isi Form Administrasi Untuk Mendaftar Beasiswa',
        ];

        $user->notify(new UserRegister($insideMail));

        return redirect()->route('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\NotifAdmin;
use App\Models\User;
use App\Notifications\UserRegister;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function homepage()
    {
        return view('user.homepage.homepage');
    }

    public function biodata()
    {
        if (Auth::user()->statusOne == "Proses Pendaftaran") {
            return view('user.form.biodata.biodata');
        }

        return redirect()->back();
    }

    public function family()
    {
        if (Auth::user()->statusOne == "Proses Pendaftaran") {
            return view('user.form.family.family');
        }

        return redirect()->back();
    }

    public function education()
    {
        if (Auth::user()->statusOne == "Proses Pendaftaran") {
            return view('user.form.education.education');
        }

        return redirect()->back();
    }

    public function downloadable()
    {
        // if(Auth::user()->statusOne == "Proses Pendaftaran")
        // {
        return view('user.form.downloadable.downloadable');
        // }

        // return redirect()->back();
    }

    public function onlineTest()
    {
        if (Auth::user()->statusOne == "Melakukan Test") {
            return view('user.online.test.test');
        }

        return redirect()->back();
    }

    public function onlineInterview()
    {
        if (Auth::user()->statusTwo == "Proses Seleksi") {
            return view('user.online.interview.interview');
        }

        return redirect()->back();
    }

    public function doneOnlineTest()
    {
        User::find(Auth::user()->id)->update([
            'statusOne' => 'Proses Seleksi',
        ]);

        $user = User::find(Auth::user()->id);

        $insideMail = [
            'lineOne' => 'Hai ' . $user->name,
            'lineTwo' => 'Kamu Sudah Selesai Melaksanakan Proses Pendaftaran',
            'lineThree' => 'Silahkan Menunggu Hasil Seleksi',
        ];

        $user->notify(new UserRegister($insideMail));

        $content = $user->name . ' Telah Selesai Melakukan Proses Pendaftaran Beasiswa';

        $targetMail = User::where('role', '=', 1)->get();

        NotifAdmin::create([
            'content' => $content,
            'status' => 0,
        ]);

        $insideMail = [
            'line' => $content,
        ];

        foreach ($targetMail as $target) {
            $target->notify(new UserRegister($insideMail));
        }

        return redirect()->route('user.homepage');
    }

    public function profile()
    {
        return view('user.profile.profile');
    }
}

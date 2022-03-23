<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage()
    {
        return view('user.homepage.homepage');
    }

    public function biodata()
    {
        return view('user.form.biodata.biodata');
    }

    public function family()
    {
        return view('user.form.family.family');
    }

    public function education()
    {
        return view('user.form.education.education');
    }

    public function downloadable()
    {
        return view('user.form.downloadable.downloadable');
    }

    public function onlineTest()
    {
        return view('user.online.test.test');
    }

    public function onlineInterview()
    {
        return view('user.online.interview.interview');
    }
}

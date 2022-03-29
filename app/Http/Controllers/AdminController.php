<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Biodata;
use App\Models\Downloadable;
use App\Models\Education;
use App\Models\Family;
use App\Models\Language;
use App\Models\Networth;
use App\Models\Organization;
use App\Models\SocialMedia;
use App\Models\Talent;
use App\Models\Training;
use App\Models\University;

class AdminController extends Controller
{
    public function homepage()
    {
        return view('admin.homepage.homepage');
    }

    public function stepOne()
    {
        return view('admin.stepOne.stepOne');
    }

    public function stepTwo()
    {
        return view('admin.stepTwo.stepTwo');
    }

    public function rejected()
    {
        return view('admin.rejected.rejected');
    }

    public function detail($id)
    {
        // Data Form Biodata
        $biodata = Biodata::where('user_id', '=', $id)->first();
        $socialMedia = SocialMedia::where('user_id', '=', $id)->first();
        $university = University::where('user_id', '=', $id)->first();
        // End Data Form Biodata

        // Data Form Keluarga
        $families = Family::where('user_id', '=', $id)->get();
        $networth = Networth::where('user_id', '=', $id)->first();
        // End Data Form Keluarga

        // Data Form Pendidikan
        $educations = Education::where('user_id', '=', $id)->get();
        $achievements = Achievement::where('user_id', '=', $id)->get();
        $trainings = Training::where('user_id', '=', $id)->get();
        $organizations = Organization::where('user_id', '=', $id)->get();
        $talents = Talent::where('user_id', '=', $id)->get();
        $languages = Language::where('user_id', '=', $id)->get();
        // End Data Form Pendidikan

        // Data Form Downloadable
        $downloadable = Downloadable::where('user_id', '=', $id)->first();
        // End Data Form Downloadable

        return view('admin.detail.detail')->with([
            'biodata' => $biodata,
            'socialMedia' => $socialMedia,
            'university' => $university,
            'families' => $families,
            'networth' => $networth,
            'educations' => $educations,
            'achievements' => $achievements,
            'trainings' => $trainings,
            'organizations' => $organizations,
            'talents' => $talents,
            'languages' => $languages,
            'downloadable' => $downloadable,
        ]);
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }
}

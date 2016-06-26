<?php

namespace App\Http\Controllers;

use App\User;
use App\Photo;
use App\Models\Message;
use App\Models\Sections;
use App\Models\Trainers;
use App\Models\News;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfilePageController extends Controller
{



    public function  __construct()
    {
        if (Auth::user()) {
            $this->Userss=Auth::user();

        }
    }



    public function profile()  //Профиль (рядовой пользователь)
    {

                $profile_inf= Photo::where('email', '=', $this->Userss['email'] )->get();
                $title = "Профиль";
                return view('pages.profile',compact('title','profile_inf'));

    }



}

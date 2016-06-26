<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;
use Illuminate\Queue\Connectors\DatabaseConnector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HomeController1 extends Controller
{
    public function create1()
    {
        $vot3 = Photo::where('email', '=', Auth::user()->email)->get();
        $data1 = ['vot'=>$vot3,"title" => "Изменить профиль" ];
        return view('create',$data1);
    }

    public function create(Request $request)
    {
        $file = $request->file('photo');
        if (isset( $file )) {
            Photo::where('email', Auth::user()->email)
                ->update(['photo' => $request->file('photo')->getClientOriginalName('photo') ]);

            $file = $request->file('photo');
            $r = $request->file('photo')->getClientOriginalName('photo');
            $file->move('C://xampp/htdocs/laravel/questbook/public/img', $r);
        }

            Photo::where('email', Auth::user()->email)
                ->update([
                    'name_f' => $request->input('name_f'),
                    'name_s' => $request->input('name_s'),
                    'yo' => $request->input('yo'),
                    'city' => $request->input('city'),
                    'about' => $request->input('about')
                ]);
        return redirect('/profile');
    }
}
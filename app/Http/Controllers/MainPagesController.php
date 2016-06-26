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


class MainPagesController extends Controller
{

   private $Userss;

    public function  __construct()
    {
        if (Auth::user()) {
            $this->Userss=News::count();
        }
    }


    public function main()  //Главная
    {

        $news=News::count();
        $trainers=Trainers::count();
        $last_news=News::latest()->take(4)->get();
        $sections=Sections::count();
        $title = "Главная";
        return view('pages.main',compact('trainers',
            'last_news',
            'sections',
            'title',
            'news')
        );
    }


    public function sections()  //Секции
    {
        $trainers=Trainers::orderBy('trainer_name')->get();
        $sections=Sections::orderBy('section_name')->paginate(8);
        $title =  "Секции";
        return view('.pages.sections',compact('trainers',
            'sections',
            'title')
        );
    }


    public function trainers()  //Тренера
    {
        $title = "Тренера";
        $trainers = Trainers::orderBy('trainer_name')->paginate(6);
        return view('pages.trainers',compact('title',
            'trainers')
        );
    }


    public function archive()  //Архив
    {
        $title = "Архив";
        $news = News::orderBy('updated_at')->paginate(6);
        return view('pages.archive',compact('title',
            'news')
        );
    }



    public function index5()    //Редактирование профиля
    {
        $data1['title'] = "Профиль";
        if(Auth::user()) {
            $vot4 = Auth::user()->email;
            $data1['vot'] = Photo::where('email', '=', $vot4)->get();
        }
        return view('pages.profile_edit',$data1);
    }

    public function index6($us)    //Просмотр чужого профиля
    {
        $vot6=User::where('name','=',$us)->pluck('email')->get(0);
        $vot5 = Photo::where('email', '=', $vot6)->get();
        $vot8=Message::where('who','=',$us)->lists('theme')->all();
        $vot8 = array_unique($vot8);
        $data1['title']="Профиль";
        $data1['vot1']=$vot5;
        $data1['vot7']=$vot8;
        if(Auth::user()) {
            if(Auth::user()->email==$vot6)
            {
                return redirect('/profile');
            } else {
            $vot4 = Auth::user()->email;
            $vot1 = Photo::where('email', '=', $vot4)->get();
            $data1['vot']=$vot1;
            }
        }
        return view('pages.profile_user',$data1);

    }

    public function index7($id_news)    //Просмотр новости
    {
        $news=News::where('id','=',$id_news)->get();
        $data1['title']="Архив";
        $data1['news'] = $news;
        if(Auth::user()) {
            $vot4 = Auth::user()->email;
            $vot1 = Photo::where('email', '=', $vot4)->get();
            $data1['vot'] = $vot1;
        }
        return view('pages.archive_news',$data1);
    }

    public function index8($section_name)    //Просмотр секции
    {
        $sections=Sections::where('section_name','=',$section_name)->get();
        $sections=$sections->toArray();

        $data1['title'] = "Секции";
        $data1['sections'] = $sections;

        $data1['trainer']=explode(',',$sections[0]['trainers']);

        if(Auth::user()) {
            $vot4 = Auth::user()->email;
            $vot1 = Photo::where('email', '=', $vot4)->get();
            $data1['vot'] = $vot1;
        }
        return view('pages.sections_section',$data1);
    }
}

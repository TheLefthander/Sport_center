<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Trainers;
use App\Models\Sections;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPageController extends controller
{

    public function  __construct()
    {
        $this->userss = Auth::User();

    }      //Информация о пользователе/админе


    public function admin()                  //Профиль админимтратора
    {
        $title = "Профиль администратора";
        $sections = Sections::count();
        $trainers = Trainers::count();
        $news = News::count();
        return view('pages.profile_admin', compact('title',
                'sections',
                'trainers',
                'news')
        );
    }


    public function create_news()            //Добавление новости
    {
        $sections = Sections::orderby('section_name')->get();
        $title = "создание новости";
        return view('pages.create_news', compact('title',
            'sections'));
    }


    public function edit_news()              //Редактирование новости
    {

        $title = "Редактирование новости";
        $news = News::latest()->get();
        $request = Request('news_to_edit');
        if (!empty($request)) {
            $sections = Sections::orderby('section_name')->get();
            $old_news = News::find($request);
            return view('pages.edit_news', compact('title',
                    'news',
                    'old_news',
                    'sections')
            );
        }
        return view('pages.edit_news', compact('title',
                'news')
        );

    }


    public function delete_news()            //Удаление новости
    {

        $news = News::latest()->get();
        $title = "удаление новости";
        return view('pages.delete_news', compact('title',
                'news')
        );

    }


    public function create_section()         //Добавление секции
    {

        $title = "создание секции";
        $trainers = Trainers::orderby('trainer_name')->get();
        return view('pages.create_section', compact('title',
                'trainers')
        );

    }


    public function edit_section()           //Редактирование секции
    {
        $title = "Редактирование секции";
        $sections = Sections::orderby('section_name')->get();
        $request = Request('section_to_edit_id');
        if (!empty($request)) {
            $trainers = Trainers::orderby('trainer_name')->get();
            $old_section = Sections::find($request);
            $each_trainer_old = explode(",", $old_section['trainers']);
            return view('pages.edit_section', compact('title',
                    'sections',
                    'trainers',
                    'old_section',
                    'each_trainer_old')
            );
        }
        return view('pages.edit_section', compact('title', 'sections'));
    }


    public function delete_section()         //Удаление секции
    {
        $title = "Удаление секции";
        $sections = Sections::orderby('section_name')->get();
        return view('pages.delete_section', compact('title', 'sections'));
    }


    public function create_trainer()         //Добавление тренера
    {
        $title = "Создание карточки тренера";
        return view('pages.create_trainer', compact('title'));
    }


    public function delete_trainer()         //Уудаление тренера
    {
        $trainers = trainers::orderby('trainer_name')->get();
        $title = "Удаление карточки тренера";
        return view('pages.delete_trainer', compact('title', 'trainers'));
    }

}


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


class AdminOperationsController extends Controller
{

    private $Userss;

    public function  __construct()
    {
        if (Auth::user()) {
            $this->Userss = News::count();
        }
    }

    //Операции с Новостями

    public function create_or_edit_news()                //Создание или Редактирование новости (ОБРАБОТКА)
    {
        $request = Request();

        if (!empty($request['change'])) {

            $news_to_change = News::find($request['old_news_id']);
            $news_to_change['news'] = $request['news'];
            $news_to_change['news_message'] = $request['news_message'];

            $file = $request->file('news_picture');

            if (isset($file)) {
                $file->move('c://xampp/htdocs/laravel/questbook/public/img/news', $file->getclientoriginalname('news_picture'));
                $news_to_change['news_picture'] = $file->getclientoriginalname('news_picture');
            }

            if ($request['section'] != "") {


                if ($request['section'] == "delete") {
                    $news_to_change['section'] = "";
                } else {

                    $news_to_change['section'] = $request['section'];
                }
            }
            $news_to_change->save();

        } else {

            $file = $request->file('news_picture');
            if (isset($file)) {
                $rules['news_picture'] = 'image|max:4000';
            }
            $rules ['news'] = 'required|unique:news|max:50';
            $rules['news_message'] = 'required';

            $this->validate($request, $rules,
                $messages = [
                    'unique' => 'такое :attribute уже сущесвует.',
                    'required' => 'Вы не ввели  :attribute!!',
                    'image' => 'загружаемый файл должен быть картинкой'
                ]
            );

            $new_news = new News;

            if (isset($file)) {
                $file->move('c://xampp/htdocs/laravel/questbook/public/img/news', $file->getclientoriginalname('news_picture'));
                $new_news['news_picture'] = $file->getclientoriginalname('news_picture');
            }
            $new_news['news'] = $request['news'];
            $new_news['section'] = $request['section'];
            $new_news['news_message'] = $request['news_message'];
            $new_news->save();
        }

        return redirect('/admin');
    }


    public function delete_news()                        //Удаление новости (ОБРАБОТКА)
    {
        $id = Request('news_to_delete');
        News::destroy($id);
        return redirect('/admin');

    }

    //Операции с Секциями

    public function create_or_edit_section()            //Создание или Редактирование секции (ОБРАБОТКА)
    {
        $request = Request();

        if (!empty($request['change'])) {


            $section_to_change = Sections::find($request['section_to_edit_id']);
            $section_to_change['section_name'] = $request['section_name'];
            $section_to_change['section_about'] = $request['section_about'];

            $trainers_old = $section_to_change['trainers'];

            if (!(empty($request['trainers']))) {
                if ($trainers_old == "") {
                    $section_to_change['trainers'] = implode(",", $request['trainers']);
                } else {
                    $section_to_change['trainers'] = implode(",", $request['trainers']) . "," . $trainers_old;
                }
            }

            if (!(empty($request['trainers_to_delete']))) {
                $old = explode(",", $section_to_change['trainers']);
                $section_to_change['trainers'] = implode(",", array_diff($old, $request['trainers_to_delete']));
            }

            News::where('section', '=', $request['section_name'])
                ->update([
                        'section' => $request['section_name']
                    ]
                );

            $file = $request->file('section_picture');
            if (isset($file)) {
                $file->move('c://xampp/htdocs/laravel/questbook/public/img/sections', $file->getclientoriginalname('section_picture'));
                $section_to_change['section_picture'] = $file->getclientoriginalname('section_picture');
            }
            $section_to_change->save();
            return redirect('/admin');
        };


        $file = $request->file('section_picture');
        if (isset($file)) {
            $rules['section_picture'] = 'image|max:4000';
        }
        $rules ['section_name'] = 'required|unique:sections|max:100';
        $rules['section_about'] = 'required';
        $this->validate($request, $rules,
            $messages = [
                'unique' => 'такое :attribute уже сущесвует.',
                'max' => 'размер картинки не должен превышать 4мб',
                'required' => 'вы не ввели  :attribute!!',
                'image' => 'загружаемый файл должен быть картинкой'
            ]
        );

        $new_section = new Sections;

        if (isset($file)) {
            $file->move('c://xampp/htdocs/laravel/questbook/public/img/sections', $file->getclientoriginalname('section_picture'));
            $news['section_picture'] = $file->getclientoriginalname('section_picture');
        }
        $new_section['section_name'] = $request['section_name'];
        $new_section['section_about'] = $request['section_about'];
        if (!empty($request['trainers'])) {
            $new_section['trainers'] = implode(",", $request['trainers']);
        }
        $new_section->save();
        return redirect('/admin');


    }


    public function delete_section(request $request)    //Удаление секции (ОБРАБОТКА)
    {
        $id = request('section_to_delete');
        Sections::destroy($id);
        return redirect('/admin');
    }

    //Операции с Тренерами

    public function create_trainer()                    //Новый тренер (ОБРАБОТКА)
    {
        $request = Request();
        $new_trainer = new Trainers;

        $file = $request->file('trainer_picture');
        if (isset($file)) {
            $file->move('c://xampp/htdocs/laravel/questbook/public/img/trainers', $file->getclientoriginalname('trainer_picture'));
            $trainer['trainer_picture'] = $file->getclientoriginalname('trainer_picture');
        }
        $new_trainer['trainer_name'] = $request['trainer_name'];
        $new_trainer['trainer_name_first'] = $request['trainer_name_first'];
        $new_trainer['trainer_name_second'] = $request['trainer_name_second'];
        $new_trainer['trainer_name_third'] = $request['trainer_name_third'];
        $new_trainer['trainer_about'] = $request['trainer_about'];
        $new_trainer->save();
        return redirect('/admin');
    }


    public function delete_trainer(request $request)           //Удаление тренера (ОБРАБОТКА)
    {
        $id = request('trainer_to_delete');
        trainers::destroy($id);
        return redirect('/admin');
    }
}



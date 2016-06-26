<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('message/{id}/edit',['uses'=>'Controller_new@edit','as'=>'message.edit'])->where (['id'=> '[0-9]+']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {

    Route::get('/', 'MainPagesController@main');               //Главная
    Route::get('/sections', 'MainPagesController@sections');   //Секции
    Route::get('/trainers', 'MainPagesController@trainers');   //Тренера
    Route::get('/archive', 'MainPagesController@archive');     //Архив новостей
    Route::auth();  //Авторизация и регистрация

    Route::get('/archive/{id_news}', 'MainPagesController@index7');         //Открыть выбранную новость
    Route::get('/sections/{section_name}', 'MainPagesController@index8');   //Открыть выбранную секцию


    Route::group(['middleware' => 'auth'], function () {


        Route::get('/profile', 'ProfilePageController@profile')->middleware('guestadmin');    //Профиль

        Route::group(['middleware' => 'guest'], function () {

            Route::get('/admin', 'AdminPageController@admin');    //Профиль

            Route::get('/admin/create/news', 'AdminPageController@create_news');    //Профиль(админ)- создание новости
            Route::any('/admin/edit/news', 'AdminPageController@edit_news');        //Профиль(админ) - редактирование новости
            Route::get('/admin/delete/news', 'AdminPageController@delete_news');    //Удалние новости


            Route::post('/create_or_edit_news', 'AdminOperationsController@create_or_edit_news');    //Создать и сохранить,изменить новость
            Route::post('/delete_news', 'AdminOperationsController@delete_news');                  //Удалние новости


            //Операции с секциями

            Route::get('/admin/create/section', 'AdminPageController@create_section');
            Route::any('/admin/edit/section', 'AdminPageController@edit_section');
            Route::get('/admin/delete/section', 'AdminPageController@delete_section');


            Route::post('/create_or_edit_section', 'AdminOperationsController@create_or_edit_section');    //Создать и сохранить,изменить секцию секцию
            Route::post('/delete_section', 'AdminOperationsController@delete_section');                 //Удалние секции


            //Операции с тенерами

            Route::get('/admin/create/trainer', 'AdminPageController@create_trainer');
            Route::get('/admin/delete/trainer', 'AdminPageController@delete_trainer');

            Route::post('/create_or_edit_trainer', 'AdminOperationsController@create_trainer');    //Создать и сохранить тренера
            Route::any('/delete_trainer', 'AdminOperationsController@delete_trainer');


            //Профиль

            Route::get('/profile/edit', 'HomeController1@create1');    //Изменить профиль
            Route::post('/profile/edit/save', 'HomeController1@create');    //Сохранить изменения профиля
            Route::get('/profile/user/{us}', 'PagesController@index6');    //Открыть профиль другого пользователя
        });
    });


});


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} </title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/dist/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/dist/css/xoverlay.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/dist/css/media.css')}}" rel="stylesheet">

    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/bootstrap/dist/js/jquery-1.12.0.min.js')}}" type="text/javascript"></script>

</head>


{{--<body style="background: linear-gradient(to top, #f1efdd, #717b8e);background-attachment: fixed;">--}}
<body>

<header class="top_header">
    <nav class="navbar navbar-fixed-top">
        <div class="top">
            <div class="container">
                <div class="top_links">
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}">
                            <button type="button" class="btn btn-sm btn1">Войти</button>
                        </a>
                        <a href="{{ url('/register') }}">
                            <button type="button" class="btn btn-sm btn1">Регистрация</button>
                        </a>
                    @elseif (Auth::user()->is_admin)
                        <a href="{{ url('/logout') }}">
                            <button type="button" class="btn btn2">Выйти</button>
                        </a>
                        <div class="cart"> Администратор</div>
                    @else
                        <a href="{{ url('/logout') }}">
                            <button type="button" class="btn btn2">Выйти</button>
                        </a>
                        <div class="cart">  {{ Auth::user()->name }} </div>
                        @if(!empty($Profile_inf['photo']))
                            <img src="{{asset ("img/".$Profile_inf['photo'])}}" id="my_logo1"/>
                        @endif
                    @endif
                </div>
                <div class="social_buttons">
                    <a href="http://vk.com" target="_blank"> <i class="fa fa-vk"></i></a>
                    <a href="https://ru-ru.facebook.com/" target="_blank"> <i class="fa fa-facebook-square"></i></a>
                    <a href="https://twitter.com/?lang=ru" target="_blank"> <i class="fa fa-twitter-square"></i></a>
                </div>
            </div>
            <div class="main_menu">
                <div class="container">
                    <div class="main_menu1">
                        <span {{($title=="Главная")? 'class=active':''}} > <a href="{{ url('/') }}">Главная</a></span>
                        <span {{($title=="Секции")? 'class=active':''}}> <a
                                    href="{{ url('/sections') }}">Секции</a></span>
                        <span {{($title=="Тренера" )? 'class=active':''}}> <a href="{{ url('/trainers') }}">Тренера</a></span>
                        <span {{($title=="Архив")? 'class=active':''}}> <a href="{{ url('/archive') }}">Архив
                                новостей</a></span>
                        @if (Auth::user())
                            @if (Auth::user()->is_admin)
                                <span {{($title=="Профиль администратора" || $title=="Изменить профиль" )? 'class=active':''}}> <a
                                            href="{{ url('/profile') }}">Профиль администратора</a></span>
                            @else
                                <span {{($title=="Профиль" || $title=="Изменить профиль" )? 'class=active':''}}> <a
                                            href="{{ url('/profile') }}">Профиль</a></span>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


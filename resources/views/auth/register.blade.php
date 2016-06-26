@extends('layouts.app')

@section('content')

    <div class="hidden">{{$title="Регистрация" }}</div>
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel_news">
                <div class="panel-heading panel1">Регистрация</div>
                <div class="panel-body">

                    <div class="Registration">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-group-sm">


                            <label for="name" class="col-md-2 col-md-offset-2 control-label">Логин</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Логин">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-sm">


                            <label for="email" class="col-md-2 col-md-offset-2 control-label ">E-Mail</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="email@example.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-sm">
                            <label for="password" class="col-md-2 col-md-offset-2 control-label">Пароль</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} form-group-sm">
                            <label for="password_confirmation" class="col-md-3 col-md-offset-1 control-label">Подтверждение пароля</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-sm">
                                    <i class="fa fa-btn fa-user" style="padding-right: 5px"></i>Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

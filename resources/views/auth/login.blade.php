@extends('layouts.app')

@section('content')

    <div class="hidden">{{$title="Войти" }}</div>
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel_news ">
                <div class="panel-heading panel1">Войти</div>
                <div class="panel-body">
                    <div class="Registration">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-sm">
                            <label for="email" class="col-md-2 col-md-offset-2 control-label">E-Mail</label>

                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="email@example.com" id="email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-sm">
                            <label class="col-md-2 col-md-offset-2 control-label">Пароль</label>

                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> <span style="font-size: 14px;color:black">Запомнить меня</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-sm">
                                    <i class="fa fa-btn fa-sign-in" style="padding-right: 5px"></i>Войти
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}" style="color:black">Зыбыли пароль?</a>
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

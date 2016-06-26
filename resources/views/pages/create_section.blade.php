
@include('head')



<div class="container">


        <br>
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel_news ">
                    <div class="panel-heading panel1">
                        Добавление секции
                    </div>
                    <div class="panel-body">
                        <div class="Registration1">
                            <form class="form-horizontal" role="form" method="post" action="{{ url('/create_or_edit_section') }}"
                                  enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                Обязательная информация
                                <hr>
                                <div class="form-group {{ $errors->has('section_name') ? ' has-error' : '' }} form-group-sm" >
                                    <label for="password1" class="col-md-2  control-label">
                                        Название секции
                                    </label>
                                    <div class="col-md-10">
                                        <input type="hidden" name="new_section" value="1"/>
                                        <input type="text"  autocomplete="off"  id="password1" class="form-control " name="section_name" value="{{ (old('new_section'))?  old('section_name') : "" }}"/>
                                        @if ($errors->has('section_name'))
                                            <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('section_name') }}
                                                    </strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('section_about') ? ' has-error' : '' }} form-group-sm" >
                                    <label for="password1" class="col-md-2  control-label">
                                        Описание занятий и направления подготовки секции
                                    </label>
                                    <div class="col-md-10">
                                            <textarea  rows="10" cols="70" wrap="hard" id="password1" class="form-control"
                                                       name="section_about">{{ (old('new_section'))?  old('section_about') : "" }}
                                            </textarea>
                                        @if ($errors->has('section_about'))
                                            <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('section_about') }}
                                                    </strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                Необязательная информация
                                <hr>
                                <div class="form-group {{ $errors->has('section_picture') ? ' has-error' : '' }} form-group-sm">
                                    <label for="picture" class="col-md-2 control-label">
                                        Выберите картинку
                                    </label>
                                    <div class="col-md-10">
                                        <input type="file"  id="picture" name="section_picture" >
                                        @if ($errors->has('section_picture'))
                                            <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('section_picture') }}
                                                    </strong>
                                             </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group form-group-sm" >
                                    <label for="password1" class="col-md-2  control-label">
                                        Подключить к секции тренеров
                                    </label>
                                    <div class="col-md-10" >
                                        <select name="trainers[]" multiple="multiple" size="7"  class="form-control"
                                                id="password1">
                                            <option value="">
                                                -
                                            </option>
                                            @foreach ($trainers as $trainer)
                                                <option>
                                                    {{$trainer['trainer_name']}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group form-group-sm" >
                                    <div class="col-md-offset-2 col-md-2">
                                        <button type="submit" class="btn btn-sm btn3">
                                            Создать секцию
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @include('right_board')
        </div>
    </div>





@include('footer')


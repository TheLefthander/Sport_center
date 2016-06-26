@include('head')


<div class="container">


    <br>

    <div class="row">
        <div class="col-md-10">
            <div class="panel panel_news ">
                <div class="panel-heading panel1">
                    Изменение секции
                </div>
                <div class="panel-body">
                    <div class="Registration1">
                        <form class="form-horizontal" role="form" method="post"
                              action="{{ url('/admin/edit/section') }}">
                            {!! csrf_field() !!}
                            Выберите секцию
                            <hr>
                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">
                                    Выберите секцию
                                </label>

                                <div class="col-md-10">
                                    <select name="section_to_edit_id" class="form-control" id="password1">
                                        @foreach ($sections as $section)
                                            <option value="{{$section['id']}}">
                                                {{$section['section_name']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-group-sm">
                                <div class="col-md-offset-2 col-md-2">
                                    <button type="submit" class="btn btn-sm btn3">
                                        Редактировать секцию
                                    </button>
                                </div>
                            </div>
                        </form>


                        @if (!empty($old_section))

                            <form class="form-horizontal" role="form" method="post"
                                  action="{{ url('/create_or_edit_section') }}"
                                  enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <hr>
                                <hr>
                                Изменить информацию по секции :{{ $old_section['section_name'] }}
                                <hr>
                                Обязательная информация
                                <hr>
                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Название секции
                                    </label>

                                    <div class="col-md-10">
                                        <input type="text" autocomplete="off" id="password1" class="form-control"
                                               name="section_name" value="{{ $old_section['section_name'] }}"/>
                                    </div>
                                </div>
                                <input type="text" class="hidden" name="section_to_edit_id"
                                       value="{{ $old_section['id'] }}"/>
                                <input type="text" class="hidden" name="change" value="1">

                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Описание занятий и направления подготовки секции
                                    </label>

                                    <div class="col-md-10">
                                                    <textarea rows="10" cols="70" id="password1" class="form-control"
                                                              name="section_about">
                                                        {{  $old_section['section_about'] }}
                                                    </textarea>
                                    </div>
                                </div>

                                <hr>
                                Необязательная информация
                                <hr>
                                <div class="form-group form-group-sm">
                                    <label for="picture" class="col-md-2  control-label">
                                        Выберите картинку
                                    </label>

                                    <div class="col-md-10">
                                        <input type="file" id="picture" name="section_picture">
                                    </div>
                                </div>


                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Подключить к секции тренеров
                                    </label>

                                    <div class="col-md-10">
                                        <select name="trainers[]"
                                                {{ ((count($each_trainer_old))==count($trainers))? "disabled=disabled size=1" : "size=7"}} multiple
                                                class="form-control" id="password1">
                                            @if ((count($each_trainer_old))==count($trainers))
                                                <option>
                                                    Все тренера уже задействованы в этой секции
                                                </option>
                                            @endif
                                            @foreach ($trainers as $trainer)
                                                @if (!in_array( $trainer['trainer_name'],$each_trainer_old))
                                                    <option value="{{$trainer['trainer_name']}}">
                                                        {{$trainer['trainer_name']}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Удалить из секции тренеров
                                    </label>

                                    <div class="col-md-10">
                                        <select name="trainers_to_delete[]"
                                                {{ ((($old_section['trainers']))== "")? " disabled=disabled size=1" : "size=7"}} multiple
                                                class="form-control" id="password1">
                                            @if ((($old_section['trainers']))==""  ))
                                            <option>
                                                Пока не подключен ни один тренер
                                            </option>
                                            @else
                                                @foreach ($each_trainer_old as $trainer_old)
                                                    <option value="{{$trainer_old}}">
                                                        {{$trainer_old}}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group form-group-sm">
                                    <div class="col-md-offset-2 col-md-2">
                                        <button type="submit" class="btn btn-sm btn3">
                                            Cохранить изменения
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        @include('right_board')


    </div>
</div>


@include('footer')


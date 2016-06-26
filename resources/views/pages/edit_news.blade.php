@include('head')


<div class="container">


    <br>

    <div class="row">
        <div class="col-md-10">
            <div class="panel panel_news ">
                <div class="panel-heading panel1">
                    Изменение новости
                </div>
                <div class="panel-body">
                    <div class="Registration1">
                        <form class="form-horizontal" role="form" method="post" action="{{ url('/admin/edit/news') }}">
                            {!! csrf_field() !!}
                            Выберите новость
                            <hr>
                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">
                                    Выберите новость
                                </label>

                                <div class="col-md-10">
                                    <select name="news_to_edit" class="form-control" id="password1">
                                        @foreach ($news as $new)
                                            <option value="{{$new['id']}}">
                                                {{$new['created_at']}} --- "{{$new['news']}}"
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-group-sm">
                                <div class="col-md-offset-2 col-md-2">
                                    <button type="submit" class="btn btn-sm btn3">
                                        Изменить новость
                                    </button>
                                </div>
                            </div>
                        </form>


                        @if (!empty($old_news))

                            <form class="form-horizontal" role="form" method="post"
                                  action="{{ url('/create_or_edit_news') }}"
                                  enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <hr>
                                <hr>
                                Изменить новость : {{ ($old_news['news']) }}
                                <hr>
                                Обязательная информация
                                <hr>
                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Название новости
                                    </label>

                                    <div class="col-md-10">
                                        <input type="text" autocomplete="off" id="password1" class="form-control"
                                               name="news" value="{{ $old_news['news'] }}"/>
                                    </div>
                                </div>

                                <input type="text" class="hidden" name="old_news_id" value="{{ $old_news['id'] }}"/>
                                <input type="text" class="hidden" name="change" value="1">

                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Описание занятий и направления подготовки секции
                                    </label>

                                    <div class="col-md-10">
                                                    <textarea rows="10" cols="70" id="password1" class="form-control"
                                                              name="news_message">
                                                        {{  $old_news['news_message'] }}
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
                                        <input type="file" id="picture" name="news_picture">
                                    </div>
                                </div>


                                <div class="form-group form-group-sm">
                                    <label for="password1" class="col-md-2  control-label">
                                        Подключить секцию
                                    </label>

                                    <div class="col-md-10">
                                        <select name="section" class="form-control" id="password1">

                                            <option value="">-</option>
                                            <option value="delete" style="color:red">Удалить подключенную секцию
                                            </option>
                                            @foreach ($sections as $section)
                                                <option value="{{$section['section_name']}}">
                                                    {{$section['section_name']}}
                                                </option>
                                            @endforeach


                                        </select>
                                        <h6>
                                            <div style="color:green">{{ (($old_news['section']=="") ? "": "Подключена секция : ".$old_news['section']) }}</div>
                                            Подключить можно только одну секцию,либо вообще не подключать
                                        </h6>
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


@include('head')


<div class="container">


    <br>


    <div class="row">
        <div class="col-md-10">
            <div class="panel  panel_news ">
                <div class="panel-heading panel1">Добавление тренера</div>
                <div class="panel-body">
                    <div class="Registration1">

                        <form class="form-horizontal" role="form" method="post"
                              action="{{ url('create_or_edit_trainer') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            Обязательная информация
                            <hr>
                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">Фамилия И.О.</label>

                                <div class="col-md-10">
                                    <input type="text" autocomplete="off" id="password1" class="form-control"
                                           name="trainer_name"/>
                                </div>
                            </div>

                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">Фамилия</label>

                                <div class="col-md-10">
                                    <input type="text" autocomplete="off" id="password1" class="form-control"
                                           name="trainer_name_first"/>
                                </div>
                            </div>

                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2 control-label">Имя</label>

                                <div class="col-md-10">
                                    <input type="text" autocomplete="off" id="password1" class="form-control"
                                           name="trainer_name_second"/>
                                </div>
                            </div>

                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2 2 control-label">Отчество</label>

                                <div class="col-md-10">
                                    <input type="text" autocomplete="off" id="password1" class="form-control"
                                           name="trainer_name_third"/>
                                </div>
                            </div>


                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">О тренере</label>

                                <div class="col-md-10">
                                    <textarea rows="10" cols="70" wrap="hard" id="password1" class="form-control"
                                              name="trainer_about"></textarea>
                                </div>
                            </div>


                            <hr>
                            Необязательная информация
                            <hr>
                            <div class="form-group form-group-sm">
                                <label for="picture" class="col-md-2  control-label">Выберите фотографию</label>

                                <div class="col-md-10">
                                    <input type="file" id="picture" name="trainer_picture">

                                </div>
                            </div>

                            <hr>


                            <div class="form-group form-group-sm">
                                <div class="col-md-offset-2 col-md-2">
                                    <button type="submit" class="btn btn-sm btn3">Сохранить тренера в базе</button>
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


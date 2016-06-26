@include('head')


<div class="container">


    <br>

    <div class="row">
        <div class="col-md-10">
            <div class="panel panel_news ">
                <div class="panel-heading panel1">
                    Удаление новости
                </div>
                <div class="panel-body">
                    <div class="Registration1">
                        <form class="form-horizontal" role="form" method="post" action="{{ url('/delete_trainer') }}">
                            {!! csrf_field() !!}
                            Выберите карточку тренера для удаления
                            <hr>
                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">
                                    Выберите новость
                                </label>

                                <div class="col-md-10">
                                    <select name="trainer_to_delete" class="form-control" id="password1">
                                        @foreach ($trainers as $trainer)
                                            <option value="{{$trainer['id']}}">
                                                "{{$trainer['trainer_name']}}" --- работает с {{$trainer['created_at']}}
                                                ---
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-group-sm">
                                <div class="col-md-offset-2 col-md-2">
                                    <button type="submit" class="btn btn-sm btn3">
                                        Удалить карточку тренера
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


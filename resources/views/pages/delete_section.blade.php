@include('head')


<div class="container">


    <br>

    <div class="row">
        <div class="col-md-10">
            <div class="panel panel_news ">
                <div class="panel-heading panel1">
                    Удаление секции
                </div>
                <div class="panel-body">
                    <div class="Registration1">
                        <form class="form-horizontal" role="form" method="post" action="{{ url('/delete_section') }}">
                            {!! csrf_field() !!}
                            Выберите секцию для удаления
                            <hr>
                            <div class="form-group form-group-sm">
                                <label for="password1" class="col-md-2  control-label">
                                    Выберите секцию
                                </label>

                                <div class="col-md-10">
                                    <select name="section_to_delete" class="form-control" id="password1">
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
                                        Удалить секцию
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


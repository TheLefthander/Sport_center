
@include('head')



<div class="container">



        <br>
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel_news ">
                    <div class="panel-heading panel1">Добавление новости</div>
                    <div class="panel-body">
                        <div class="Registration1">

                            <form class="form-horizontal" role="form" method="post"
                                  action="{{ url('/create_or_edit_news') }}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                Обязательная информация<hr>



                                <div class="form-group form-group-sm {{ $errors->has('news') ? ' has-error' : '' }}"  >
                                    <label for="password1" class="col-md-2  control-label">Название новости</label>
                                    <div class="col-md-10">
                                        <input type="text" autocomplete="off"  id="password1" class="form-control"  value="{{ $errors->isEmpty() ?  "" :old('news')  }}" name="news" />
                                        @if ($errors->has('news'))
                                            <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('news') }}
                                                    </strong>
                                                </span>
                                        @endif


                                    </div>
                                </div>
                                <div class="form-group form-group-sm {{ $errors->has('news_message') ? ' has-error' : '' }}" >
                                    <label for="password1" class="col-md-2  control-label"  value="{{ $errors->isEmpty()  ?  "" :old('news_message')  }}"   >Текст новости</label>
                                    <div class="col-md-10">
                                            <textarea   rows="10" cols="70" wrap="hard" id="password1"
                                                        class="form-control" name="news_message">
                                                {{old('news_message')}}
                                            </textarea>
                                        @if ($errors->has('news_message'))
                                            <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('news_message') }}
                                                    </strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <hr>Необязательная информация<hr>
                                <div class="form-group form-group-sm">
                                    <label for="picture" class="col-md-2  control-label">Выберите картинку</label>
                                    <div class="col-md-10">
                                        <input type="file" id="picture" name="news_picture" >
                                    </div>
                                </div>
                                <div class="form-group form-group-sm" >
                                    <label for="password1" class="col-md-2  control-label"  >Подключить секцию</label>
                                    <div class="col-md-10" >
                                        <select name="section"  class="form-control" id="password1">
                                            <option value="">-</option>
                                            @foreach ($sections as $section)
                                                <option value={{$section['section_name']}}>{{$section['section_name']}}</option>
                                            @endforeach
                                        </select><h6>Подключить можно только одну секцию,либо вообще не подключить</h6>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group form-group-sm" >
                                    <div class="col-md-offset-4 ">
                                        <button type="submit" class="btn btn-sm btn3">Оставить новость</button>
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


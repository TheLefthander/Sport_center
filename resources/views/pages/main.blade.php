@include('head')

<div class="container">
    <div class="row">
        <br>

        <div class="col-md-9 col-sm-12 col-xs-12 col-lg-6">
            <div class="panel panel_news">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">

                            @if (!empty($last_news[0]['news_picture']))
                                <div align="center">
                                    <img src="{{asset('img/news/'.($last_news[0]['news_picture']))}}"
                                         style="width:100%;height: 100%" alt="...">
                                </div>
                            @else
                                <div align="center">
                                    <img src="{{asset('img/default.png')}}" style="width: 525px;height:350px;"
                                         alt="...">
                                </div>
                            @endif


                            <div class="carousel-caption">
                                <div class="news">
                                    <a class="news" href="{{ url('/archive/'.$last_news[0]['id']) }}">
                                        {{$last_news[0]['news']}}
                                    </a>
                                </div>
                                <br>

                                <div class="label pull-left label_section">
                                    Новость от: {{ $last_news[0]['created_at'] }}
                                </div>

                                @if (!empty($last_news[0]['section']))
                                    <div class="label label_section pull-left " style="margin-top: 3px">
                                        <a href="{{ url('/sections/'.$last_news[0]['section']) }}"
                                           class="link_to_news_1">
                                            Секция: {{ $last_news[0]['section'] }}
                                        </a>
                                    </div>
                                @endif

                                <br>
                            </div>
                        </div>


                        @for ($i = 1; $i < 3; $i++)
                            <div class="item">


                                @if (!empty($last_news[$i]['news_picture']))
                                    <div align=center">
                                        <img src="{{asset('img/news/'.($last_news[$i]['news_picture']))}}"
                                             style="width: 100%;height: 100%" alt="...">
                                    </div>
                                @else
                                    <div align="center">
                                        <img src="{{asset('img/default.png')}}" style="width: 525px;height: 350px;"
                                             alt="...">
                                    </div>
                                @endif

                                <div class="carousel-caption">
                                    <div class="news">
                                        <a class="news" href="{{ url('/archive/'.$last_news[$i]['id']) }}">
                                            {{$last_news[$i]['news']}}
                                        </a>
                                    </div>
                                    <br>


                                    <div class="label pull-left label_section">
                                        Новость от: {{ $last_news[$i]['created_at'] }}
                                    </div>

                                    @if (!empty($last_news[$i]['section']))
                                        <div class="label label_section pull-left " style="margin-top: 3px">
                                            <a href="{{ url('/sections/'.$last_news[$i]['section']) }}"
                                               class="link_to_news_1">
                                                Секция: {{ $last_news[$i]['section'] }}
                                            </a>
                                        </div>
                                    @endif

                                    <br>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Controls -->
                    <div class="pull-right">
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                           data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6" style="height: 195px">
            <div class="panel panel_news" style="background-color:#CFD8DC;">
                <div class="panel-heading label_for_news"
                     style="font-size: 25px;color:#051f34;border-bottom:2px solid white ;">
                    Краткой строкой

                </div>
                <div class="panel-body">
                    <p style="font-size: 15px;color:#051f34;">Спортивный центр является одним из самых больших и
                        технологически-продвинутых в СПб, в данным момент в центре работают {{ $trainers }} тренера
                        по {{ $sections }} секциям. </p>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 achievment">
            <div class="panel panel_news" style="background-color: #CFD8DC;">

                <div id="carousel-example-generic_1" class="carousel slide" data-ride="carousel" style="height: 50%">
                    <!-- Indicators -->


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">

                            @if (!empty($last_news[0]['news_picture']))

                                <div align=left">
                                    <img src="{{asset('img/news/'.($last_news[0]['news_picture']))}}"
                                         style="max-width:37.5%" alt="...">
                                </div>
                            @else
                                <div align=left">
                                    <img src="{{asset('img/default.png')}}" style="max-width:37.5%" alt="...">
                                </div>
                            @endif


                            <div class="carousel-caption carousel-caption_1">

                                <p align="left" style="color:#051f34;font-size: 15px ;text-shadow:none;">
                                    Кубок за победу на чемпионате по баскеболу №2.
                                </p>
                            </div>

                        </div>


                        @for ($i = 1; $i < 3; $i++)
                            <div class="item">


                                @if (!empty($last_news[$i]['news_picture']))

                                    <div align=left">
                                        <img src="{{asset('img/news/'.($last_news[$i]['news_picture']))}}"
                                             style="max-width:37.5%" alt="...">
                                    </div>
                                @else
                                    <div align=left">
                                        <img src="{{asset('img/default.png')}}" style="max-width: 230px;height: 155px;"
                                             alt="...">
                                    </div>
                                @endif


                                <div class="carousel-caption carousel-caption_1">

                                    <p align="left" style="color:#051f34;font-size: 15px ;text-shadow:none;">
                                        Кубок за победу на чемпионате по баскеболу №2.
                                    </p>
                                </div>

                            </div>
                        @endfor
                    </div>

                    <!-- Controls -->
                    <div class="pull-right">
                        <a class="left carousel-control" href="#carousel-example-generic_1" role="button"
                           data-slide="prev">
                            <span class=" glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic_1" role="button"
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel_news" style="border:none;">
                <div class="panel-heading label_for_news_3" style="background-color:#607D8B;border-radius: 0;">

                    <div align="center" class=text-center" style="margin-top:5px;">
                        Секции
                        <div class="badge"
                             style="color:#607D8B;background-color:white;margin-right:25px">{{$sections}}</div>
                        Тренера
                        <div class="badge"
                             style="color:#607D8B;background-color:white;margin-right:25px ">{{$trainers}}</div>
                        Новостей
                        <div class="badge" style="color:#607D8B;background-color:white;;">{{$news}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('footer')


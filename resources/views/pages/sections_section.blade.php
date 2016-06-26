@if (Auth::user())
    @foreach( $vot as $vot2)
    @endforeach
@endif

@include('head')





@foreach( $sections as $section)
@endforeach



<div class="container">

    <br>

    <div class="row">


        <div class="col-md-3">

            <div class="col-lg-12" style="padding:0">
                <div class=" panel panel_news">
                    <div class="panel-heading "
                         style=" color: #051f34;font-size:25px;padding: 0;border-bottom:2px solid white ;">

                        @if (!empty($section['section_picture']))
                            <img src="{{asset('img/sections/'.$section['section_picture'])}}" id="news_logo"/>
                        @endif

                        <table style="height: 70px;width: 100%; line-height: 25px;">
                            <tr style="height: 50px;">
                                <td align="center">
                                    <p class="text-center"
                                       style="padding-top: 10px;padding-left:5px;padding-right: 5px;color: #051f34 ">{{$section['section_name']}}</p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="panel-body">
                        <div class="panel-title">

                            <div class="label label label_section_news pull-right">
                                От: {{ $section['created_at'] }}
                            </div>

                            <br>

                            <div class="label label label_section_news pull-right">
                                <div class="link_to_news_1">
                                    Тренеров: {{  (!empty($section['trainers']))? count(explode(",",$section['trainers'])): 0 }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12" style="padding:0">
                <div class="panel text-center" style="color:red;background-color: #00a100;border-radius: 0">
                    Записаться
                </div>
            </div>

        </div>


        <div class="col-xs-9 col-sm-9 col-md-4 col-lg-5">
            <div class="panel panel_news">
                <div class="panel-heading body_news text-center">
                    Об секции
                </div>
                <div class="panel-body body_news">

                    <div style="text-align:justify ;font-size: 15px;text-indent: 25px;">{!!  $section['section_about'] !!}</div>

                </div>
            </div>
        </div>


        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">


            <div class="panel panel_news" style="background-color: #78909C;color:white">

                <div class="panel-heading text-center" style="  border-bottom:2px solid white">
                    Тренера
                </div>
                <div class="panel-body">

                    @foreach( $trainer as $train)

                        <div style="font-size: 15px;color:white; ">
                            <ul>
                                <li>
                                    <a style="font-size: 15px;color:white;" href="{{ url('/trainers/'.$train) }}">
                                        {{$train}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


    </div>
</div>


@include('footer')
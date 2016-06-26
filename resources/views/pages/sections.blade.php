@include('head')


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-11 col-md-10 col-lg-8">
            @if (! $sections ->isEmpty() )
                <br>

                <div class="row">

                    @foreach ($sections as $section)
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class=" panel panel_news">
                                <div class="panel-body body_news_1">

                                    <a class="news_2" href="{{ url('/sections/'.$section['section_name']) }}">

                                        @if (!empty($section['section_picture']))
                                            <img src="{{asset('img/sections/'.$section['section_picture'])}}"
                                                 class="news_logo_1"/>
                                        @endif

                                        <table style="height: 70px;width: 100%; line-height: 25px;">
                                            <tr style="height: 50px;">
                                                <td align="center">
                                                    <p class="text-center"
                                                       style="padding-top: 10px;padding-left:5px;padding-right: 5px ">{{$section['section_name']}}</p>
                                                </td>
                                            </tr>
                                        </table>


                                    </a>

                                    <div class="col-md-12">
                                        <hr style="border-top:2px solid #607D8B;margin-top:7px; ">
                                        <div class="panel-title">

                                            <div style="font-size: 11px;padding-top:3px; background-color:#607D8B; color:white;"
                                                 class="label pull-right">
                                                От: {{ $section['created_at'] }}
                                            </div>
                                            <br>

                                            <div style="margin-top:3px;font-size: 12px;padding-top:3px; background-color:#fe8b5b"
                                                 class="label label_section pull-right">
                                                <div class="link_to_news_1">
                                                    Тренеров: {{  (!empty($section['trainers']))? count(explode(",",$section['trainers'])): 0 }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach

                </div>
            @endif
            <div class="text-center">
                {!! $sections->render() !!}
            </div>
        </div>
        <br>

        <div class="col-md-4 col-sm-5 col-xs-4 ">

            <div class="panel panel_news" style="background-color: #78909C">
                <div class="panel-heading text-center label_for_news_2"
                     style="background-color: #78909C;color:white;border-bottom: 2px solid white">
                    Все секции
                </div>

                <div class="panel-body" style="background-color: #78909C">
                    @foreach($s=\App\Models\Sections::all() as $section)
                        <div style="padding-left:30px;font-size: 15px;color:#f4f5f5; ">
                            <li>
                                <a style="font-size: 15px;color:#f4f5f5;"
                                   href="{{ url('/sections/'.$section['section_name']) }}">
                                    {{$section['section_name']}}
                                </a>
                            </li>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')
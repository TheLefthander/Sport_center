@include('head')


@foreach( $news as $new)
@endforeach


<div class="container">

    <br>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

            <div class="panel panel_news">

                <div class="panel-heading body_news">

                    <div class="row">
                        <div class="col-md-6">

                            <p style="margin:0;word-wrap: break-word">{{$new['news'] }}</p>

                            <div class="krai">
                                <div class="label label_section_news" style="margin-right: 5px">
                                    Новость от: {{ $new['created_at'] }}
                                </div>
                                <div class="label label_section_news">
                                    <a href="{{ url('/sections/'.$new['section']) }}" class="link_to_news_1">
                                        Секция: {{ $new['section']}}
                                    </a>
                                </div>
                            </div>

                        </div>

                        {{--  <div class="col-md-offset-1 col-md-5">

                              <img src="{{asset('img/news/'.$new['news_picture'])}}" id="news_logo_main"/>


                          </div>--}}


                    </div>
                </div>


                <div class="panel-body">


                    <p style="font-size: 15px;text-indent: 25px;color:#051f34;">{{ $new['news_message'] }}</p>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">


            <div class="panel panel_news static_picture_news" style="background-color:#f5f8fa ">

                @if (!empty($new['news_picture']))
                    <img src="{{asset('img/news/'.$new['news_picture'])}}" id="news_logo_main"/>
                @endif

            </div>
        </div>
    </div>
</div>


@include('footer')
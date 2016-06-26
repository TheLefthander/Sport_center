


@include('head')



<div class="container">

   <br>
    @foreach ($news as $new)
        <div class="row">


            <div class="col-xs-6">
                <div class=" panel panel_news">
                    <div class="panel-body body_news_1">


                              <span style="padding-left: 10px">

                                <a  href="{{ url('/archive/'.$new['id']) }}" style="color:#a3572a;font-size: 17px" >
                                     {{$new['news']}}
                                </a>

                        <small class="text-right" style="color:grey;font-size:12px;">
                            {{ $new['updated_at']}}
                        </small>

                        </span>










                    </div>
                </div>


            </div>

        </div>

        @endforeach

        <div class="text-center">
            {!! $news->render() !!}
        </div>






</div>




@include('footer')
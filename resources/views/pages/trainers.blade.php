@include('head')


<div class="container">


    @if (! $trainers ->isEmpty() )

        <br>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <div class="panel panel_news">

                            <span class="panel-body body_news text-center">
                                @foreach ($trainers as $trainer)
                                    <div class="messages">
                                        <div class="col-lg-12">

                                            <div style="padding-left:30px;font-size: 15px;color:#717b8e; ">
                                                <li>
                                                    <a class="pull-left" style="color:#a3572a;font-size:15px"
                                                       href="{{ url('/trainers/'.$trainer['trainer_name']) }}">
                                                        {{$trainer['trainer_name']}}
                                                    </a>
                                                </li>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </span>
                </div>
            </div>
        </div>
    @endif


    <div class="text-center">

        {!! $trainers->render() !!}
    </div>

</div>


@include('footer')
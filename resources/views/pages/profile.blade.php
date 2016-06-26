@foreach ($profile_inf as $Profile_inf )
@endforeach



@include('head')

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="thumbnail ">
                <div class="xoverlay x-simple text-center ">
                    <img class="x-img-main" src="{{asset("img/".$Profile_inf['photo']  ) }}" id="my_logo2"/>

                    <div class="xoverlay-box">
                        <div class="xoverlay-data x-icon-zoom">
                            <span class="x-smooth x-white" style="padding-top: 20px;">
                                <a href="{{ url("/profile/edit") }}">
                                    <i class="glyphicon glyphicon-wrench">
                                    </i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="inf1">
                        <i class="glyphicon glyphicon-user">
                        </i>
                        {{$Profile_inf['name_s']}} {{ $Profile_inf['name_f']}}, {{ $Profile_inf['yo']}}
                    </div>
                    <hr style="border-color: black">
                    <div class="inf1">
                        Город: {{$Profile_inf['city']}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 col-md-7 col-lg-7 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="inf1">
                        Обо мне
                    </div>
                    <hr style="border-color: black">
                    <div class="inf1">
                        {{$Profile_inf['about']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer');




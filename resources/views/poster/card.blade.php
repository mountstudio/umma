<div class="col-12 col-md-6 pb-4">
    {{--    <div class="card">--}}
    {{--        <a href="#"><img src="{{ asset('storage/medium/' . $poster->main_photo) }}" class="card-img-top p-2" alt="..."></a>--}}
    {{--        <div class="card-body pt-0 text-center">--}}
    {{--            <div class="row justify-content-center" style="margin-top: -4rem;">--}}
    {{--                <div class="col-4 border  rounded border-1  bg-white">--}}
    {{--                    <p class="pt-3 h4 mb-0" style="line-height: 92%;"><span--}}
    {{--                                class="text-orange">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%d') }}</span>--}}
    {{--                        <br>{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%b') }}</p>--}}
    {{--                    <p class="h4 mb-0 pb-2"></p>--}}
    {{--                    <p class="rounded-pill text-white mx-auto "--}}
    {{--                       style="background-color: #008500;width: 68%;">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%H:%m') }}</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-9">--}}
    {{--                    <h6 class="card-title text-orange pt-2">{{ $poster->type->name }}</h6>--}}
    {{--                    <a href="{{ route('show.poster', $poster) }}">--}}
    {{--                        <p class="card-text text-uppercase">{{ $poster->name }}</p>--}}
    {{--                        <p class="card-text">{{ $poster->content }}</p>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container-card">

        <div class="column">
            <div class="demo-title">Normal</div>
            <!-- Post-->
            <div class="post-module">
                <!-- Thumbnail-->
                <div class="thumbnail">
                    <div class="date">
                        <div class="day">27</div>
                        <div class="month">Mar</div>
                    </div>
                    <img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                    <div class="category">Photos</div>
                    <h1 class="title">City Lights in New York</h1>
                    <h2 class="sub_title">The city that never sleeps.</h2>
                    <p class="description">New York, the largest city in the U.S., is an architectural marvel with
                        plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span
                            class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

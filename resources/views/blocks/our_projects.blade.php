<div class="container pb-5 pt-4">
    <h2 class="text-uppercase">Наши проекты</h2>
    <div class="row text-center">
        <div class="col-12">
            @foreach($projects as $project)
                <a href="">
                    <img src="{{ asset('storage/small/' . $project->image) }}" class="img-fluid mr-4" alt="Ishker Aim">
                </a>
            @endforeach

            {{--<a href="">--}}
                {{--<img src="{{ asset('img/islam_house.png') }}" class="img-fluid mr-4" alt="Islam House">--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<img src="{{ asset('img/vilage.png') }}" class="img-fluid mr-4" alt="Vilage">--}}
            {{--</a>--}}
            {{--<a href="">--}}
                {{--<img src="{{ asset('img/younth_action.png') }}" class="img-fluid mr-4" alt="Young Action">--}}
            {{--</a>--}}
        </div>
    </div>
</div>

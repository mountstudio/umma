<div class="container bg-white pt-3">
    <div class="col pr-3">
        <h2 class="text-uppercase"><a href="{{ route('all.posters') }}">Афиша</a></h2>
    </div>
    <div class="row">
        @foreach($posters as $poster)
            <div class="col-12 col-lg-3 col-md-6 px-1 py-2">
                <div class="card">

                    <img src="{{ asset('storage/medium/' . $poster->main_photo) }}" class="card-img-top p-2"
                         alt="...">
                    <div class="card-body pt-0 text-center">
                        <div class="row justify-content-center" style="margin-top: -3rem;">
                            <div class="col-5 border  rounded border-1 px-1 bg-white">
                                <p class="pt-3 h4 mb-0" style="line-height: 92%;"><span
                                            class="text-orange">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%d') }}</span>
                                    <br>{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%b') }}</p>
                                <p class="h4 mb-0 pb-2"></p>
                                <p class="rounded-pill text-white mx-auto "
                                   style="background-color: #008500;width: 68%;">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%H:%m') }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h6 class="card-title text-orange pt-2">{{ $poster->type->name }}</h6>
                                <a href="{{ route('show.poster', $poster) }}">
                                    <p class="card-text text-uppercase">{{ $poster->name }}</p>
                                    <p class="card-text">{{ $poster->content }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

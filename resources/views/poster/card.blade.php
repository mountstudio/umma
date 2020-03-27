<div class="col-12 col-md-6 pb-4">
    <div class="card">
        <a href="#"><img src="{{ asset('storage/medium/' . $poster->main_photo) }}" class="card-img-top p-2" alt="..."></a>
        <div class="card-body pt-0 text-center">
            <div class="row justify-content-center" style="margin-top: -4rem;">
                <div class="col-4 border  rounded border-1  bg-white">
                    <p class="pt-3 h4 mb-0" style="line-height: 92%;"><span
                                class="text-orange">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%d') }}</span>
                        <br>{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%b') }}</p>
                    <p class="h4 mb-0 pb-2"></p>
                    <p class="rounded-pill text-white mx-auto "
                       style="background-color: #008500;width: 68%;">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%H:%m') }}</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9">
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

<a href="{{ route('show.poster', $poster) }}" class="card text-dark border-0 shadow-sm text-decoration-none h-100">
    <div class="position-relative shadow">
        <img src="{{ asset('storage/medium/' . $poster->main_photo) }}" class="card-img-top" style="object-fit: cover; min-height: 140px; max-height: 140px;" alt="...">
    </div>
    <div class="card-body shadow-sm border border-orange p-0 w-50 bg-white text-center rounded" style="transform: translateX(50%); margin-top: -25px;">
        <p class="pt-2 h4 mb-0" style="line-height: 75%;">
            <span class="text-orange font-weight-bold h3" style="    text-shadow: 0 .1rem .2rem rgba(213, 126, 42,.35)!important;">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%d') }}</span>
            <br>
            <span class="small text-capitalize">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%b') }}</span></p>
        <p class="h4 mb-0 pb-2"></p>
        <p class="rounded-pill text-white mx-auto small mb-2 w-50"
           style="background-color: #008500;">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%H:%M') }}</p>
    </div>
    <div class="card-footer pt-0 bg-white border-0 text-center">
        <p class="card-title small mb-1 text-secondary pt-2">{{ $poster->type->name }}</p>
            <h3 class="h5 font-weight-bold card-text">{{ $poster->name }}</h3>
    </div>
</a>

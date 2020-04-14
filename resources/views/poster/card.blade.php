<div class="card">
    <div class="position-relative">
        <img src="{{ asset('storage/medium/' . $poster->main_photo) }}" class="card-img-top" style="object-fit: cover; min-height: 140px; max-height: 140px;" alt="...">
    </div>
    <div class="card-body border border-orange p-0 w-50 bg-white text-center rounded" style="transform: translateX(50%); margin-top: -25px;">
        <p class="pt-2 h4 mb-0" style="line-height: 92%;">
            <span class="text-orange font-weight-bold">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%d') }}</span>
            <br>
            <span class="small">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%b') }}</span></p>
        <p class="h4 mb-0 pb-2"></p>
        <p class="rounded-pill text-white mx-auto small mb-2 w-50"
           style="background-color: #008500;">{{ \Carbon\Carbon::make($poster->date_event)->formatLocalized('%H:%m') }}</p>
    </div>
    <div class="card-footer pt-0 bg-white border-0 text-center">
        <p class="card-title small mb-1 text-secondary pt-2">{{ $poster->type->name }}</p>
        <a class="text-dark" href="{{ route('show.poster', $poster) }}">
            <h3 class="h5 font-weight-bold card-text">{{ $poster->name }}</h3>
        </a>
    </div>
</div>

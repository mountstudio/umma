<div class="container-fluid">
    <hr style="background-color: black;color: black;">
    <div class="row justify-content-around">
        <div class="col-12 col-lg-7">
            <div class="col">
                <h2 class="text-uppercase">Колумнисты</h2>
            </div>
            <div class="d-lg-flex border border-3 rounded p-3 text-center">
                @foreach($kolumnisty as $kolumnist)
                    <div class="col-12 col-lg-3 col-md-12">
                        <img src="{{ asset('storage/small/' . $kolumnist->photo) }}" alt="">
                        <h3 class="font-weight-bold h5 pt-2" style="min-height: 56px;">{{ $kolumnist->full_name }}</h3>
                        <p>{{ optional($kolumnist->articles->sortBy('updated_at')->first())->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-12">
            <div class="col">
                <a href="{{ route('show.hadiths') }}"><h2 class="text-uppercase text-dark">Хадис дня</h2></a>
            </div>
            <div class="border border-4 border-orange rounded p-3">
                <p>{!! $hadith->content !!}</p>
                <div class="col-12 text-right">
                    <a href="{{ route('show.hadiths') }}" class="" style="color: grey;">Читать далее...</a>
                </div>
            </div>
        </div>
    </div>
</div>

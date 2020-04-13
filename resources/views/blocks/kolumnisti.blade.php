<div class="container bg-white px-3">
{{--    <hr style="background-color: black;color: black;">--}}
    <div class="row justify-content-around">
        <div class="col-12 col-lg-7">
            <div class="col">
                <h2 class="text-uppercase text-dark"><a class="text-dark" href="{{ route('all.authors') }}">Колумнисты</a></h2>
            </div>
            <div class="d-lg-flex p-3 text-center bg-for-kolumn">
                @foreach($kolumnisty as $kolumnist)
                    <div class="col-12 col-lg-3 col-md-12">
                        <a href="{{ route('show.author', ['author' => $kolumnist]) }}">
                            <img class="rounded-circle" style="width: auto;height: 118px;"
                                 src="{{ asset('storage/small/' . $kolumnist->photo) }}" alt="">
                            <h3 class="font-weight-bold h5 pt-2 text-dark"
                                style="min-height: 56px;">{{ $kolumnist->full_name }}</h3>
                        </a>
{{--                        <p class="text-crop">{{ optional($kolumnist->articles->sortBy('updated_at')->first())->name }}</p>--}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-12">
            <div class="col">
                <a href="{{ route('all.hadiths') }}"><h2 class="text-uppercase text-dark">Хадис дня</h2></a>
            </div>
            @if($hadith)
                <div class="border border-4 border-orange rounded p-4">
                    <p style="display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{!! $hadith->content !!}</p>
                    <div class="col-12 row">
                        <a href="{{ route('all.hadiths') }}" class="text-left mr-auto" style="color: grey;">Все хадисы</a>
                        <a href="{{ route('show.hadith', $hadith) }}" class="text-right ml-auto" style="color: grey;">Читать
                            далее...</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

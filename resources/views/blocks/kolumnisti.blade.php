
<div class="container bg-white px-3">
{{--    <hr style="background-color: black;color: black;">--}}
    <div class="row justify-content-around">
        <div class="col-12 col-lg-7">
            <div class="col">
                <h2 class="text-uppercase text-dark"><a class="text-dark text-decoration-none" href="{{ route('all.authors') }}">{{ __('main.columnists') }}</a></h2>
            </div>
            <div class="d-lg-flex align-items-center p-3 text-center bg-for-kolumn">
                @foreach($kolumnisty as $kolumnist)
                    <div class="col-12 col-lg-3 col-md-12">
                        @include('authors.card', ['author' => $kolumnist])
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-12">
            <div class="col">
                <a class="text-decoration-none" href="{{ route('all.hadiths') }}"><h2 class="text-uppercase text-dark">{{ __('main.hadis_day') }}</h2></a>
            </div>
            @if($hadith)
                <div class="border border-4 border-orange rounded p-4">
                    <p style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{!! $hadith->content !!}</p>
                    <div class="col-12 row small">
                        <a href="{{ route('all.hadiths') }}" class="text-left mr-auto text-decoration-none" style="color: grey;">{{ __('main.all_hadis') }}</a>
                        <a href="{{ route('show.hadith', $hadith) }}" class="text-right ml-auto text-decoration-none" style="color: grey;">{{ __('main.read_more') }}...</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

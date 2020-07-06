@extends('layouts.app')
@push('metas')
    <meta property="og:title" content="{{ $magazine->name }}"/>
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    @if(!is_null($magazine->image))
        <meta property="og:image" content="{{ asset('storage/small/' . $magazine->image) }}">
    @else
        <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    @endif
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('magazine', $magazine) }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            @if($magazine->pdf and $magazine->kg_pdf)
                <div class="col-12 col-lg-9">
                    <button id="btn_switch" class="btn btn-primary" type="button">
                        {{ __('main.read_ru') }}
                    </button>
                </div>
                <div id="div_kg" class="col-12 col-lg-8">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->kg_pdf) }}" height="700" width="700"></iframe>
                </div>
                <div id="div_ru" class="col-12 col-lg-8 d-none">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->pdf) }}" height="700" width="700"></iframe>
                </div>
            @elseif($magazine->pdf)
                <div class="col-12 col-lg-8">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->pdf) }}" height="700" width="700"></iframe>
                </div>
            @elseif($magazine->kg_pdf)
                <div class="col-12 col-lg-8">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->kg_pdf) }}" height="700" width="700"></iframe>
                </div>
            @endif
            @include('partials.sidebar')
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var btnObserver = true;
        $('#btn_switch').click(function () {
            let $this = $(this);
            if (btnObserver) {
                $this.text("{{ __('main.read_kg') }}");
                $('#div_ru').removeClass('d-none');
                $('#div_kg').addClass('d-none');
                btnObserver = !btnObserver;
            } else {
                $this.text("{{ __('main.read_ru') }}");
                $('#div_ru').addClass('d-none');
                $('#div_kg').removeClass('d-none');
                btnObserver = !btnObserver;
            }
        });
    </script>
@endpush
@push('metas')
    <meta property="og:title" content="{{  __('main.all_hadis') }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush

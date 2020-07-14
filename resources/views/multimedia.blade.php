@extends('layouts.app')
@section('title')
    {{ __('main.multimedia') }}
@endsection
@section('content')
    @push('metas')
        <meta property="og:title" content="{{ __('main.multimedia') }}" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ request()->fullUrl() }}" />
        <meta property="og:image" content="{{ asset('img/logo.svg') }}">
        <meta property="og:site_name" content="Ummamag">
    @endpush
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('multimedia') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <h2 class="text-center">{{ __('main.media') }}</h2>
                <div class="row">
                    @foreach($multimedia as $media)
                        <div class="col-12 col-lg-6 py-2">
                            <div class="card">
                                <a class="fancybox-media" href="{{ $media->url_video }}" title="ссылка">
                                    <img src="{{ asset('storage/medium/' . $media->url_photo ) }}"
                                         class="card-img-top"
                                         alt="url_photo_media">
                                </a>
                                <a class="p-3" href="{{ route('show.media', $media) }}" title="ссылка">
                                    <h6 class="text-left">{{ $media->title }}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-3 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="py-3">
                    @include('partials.pray')
                </div>
            </div>
        </div>

    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endpush
@push('scripts')
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script>
        $('.fancybox-media').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });
    </script>
@endpush

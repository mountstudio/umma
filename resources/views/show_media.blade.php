@extends('layouts.app')
@section('content')
    @push('metas')
        <meta property="og:title" content="{{ $media->title }}">
        <meta property="og:image" content="{{ $media->url_photo }}">
        <meta property="og:url" content="{{ request()->fullUrl() }}" />
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="Ummamag">
    @endpush
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('media', $media) }}

            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <nav aria-label="breadcrumb">
                </nav>
                <div class="author d-flex justify-content-between">
                    <span>{{ $media->created_at->format('d.m.y') }}</span>
                </div>
                <div class="post-header d-flex py-2">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/video.png') }}" alt=""
                         style="width: 60px;height: 60px;">
                    <h2 class="title">
                        {{ $media->title }}
                    </h2>
                </div>
                <div class=" bg-img pb-5">
                    <a class="fancybox-media" href="{{ $media->url_video }}">
                        <div class="position-relative">
                            <img src="{{ asset('storage/medium/' . $media->url_photo) }}" class="img-fluid  w-100 position-relative" alt="">
                            <img src="{{asset('img/youtube (3).png')}}" class="youtube  position-absolute"
                                 style="left: 50%; top: 50%; transform: translate(-50%, -50%); " alt="">
                        </div>
                    </a>
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')
            </div>
            <div class="col-12 col-lg-3 pb-3">
                <div class="py-3">
                    @include('partials.pray')
                </div>
                <h2 class="text-center py-2">{{ __('main.article') }}</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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


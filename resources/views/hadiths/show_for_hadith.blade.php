@extends('layouts.app')
@section('content')

    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('hadith', $hadith) }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="post-header d-flex">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/moon (1).png') }}" alt="photo_moon_hadith">
                    <h1 class="title">
                        {{ $hadith->name }}
                    </h1>

                </div>
                <div class="pt-4">
                    <p>{!! $hadith->content !!}</p>
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.social-share-btn').click(e => {
            let btn = $(e.currentTarget);
            let social = btn.data('social');
            let url = btn.data('url');

            if (social == 'facebook') {
                url = 'https://facebook.com/sharer/sharer.php?u=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            if (social == 'vk') {
                url = 'https://vk.com/share.php?url=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
        })
    </script>
@endpush
@push('metas')
    <meta property="og:title" content="{{ $hadith->name }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush

@extends('layouts.app')
@section('title')
    {{ $poster->name }}
@endsection
@push('metas')
    <meta name="description" content="{!! $poster->content !!}">
    <meta property="og:title" content="{{ $poster->name }}"/>
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    @if(!is_null($poster->main_photo))
        <meta property="og:image" content="{{ asset('storage/small/'. $poster->main_photo) }}">
    @else
        <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    @endif
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('poster', $poster) }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <div>
                    <p>{{ __('main.date_event').': ' . \Carbon\Carbon::make($poster->date_event)->format('d.m.Y') }}</p>
                </div>
                <div class="post-header d-flex py-2">

                    <h2 class="title">
                        {{ $poster->name }}
                    </h2>
                </div>
                <div class="py-2 text-center">
                    <img class="img-fluid" src="{{ asset('storage/medium/' . $poster->main_photo) }}" alt="main_photo">
                </div>
                <div>
                    <p>{!! $poster->content !!}</p>
                </div>
                <div class="tags">
                    @if($poster->type->count())
                        <h5 class="widget-title">Тип: {{ $poster->type->name }} </h5>
                    @endif
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')
                @if($otherPosters->count())
                    <div class="row">
                        <div class="col-12 text-center pb-2">
                            <h3>{{ __('main.another_posters') }}</h3>
                        </div>
                    </div>
                @endif
                <div class="py-3">
                    @foreach($otherPosters as $posterGroup)
                        <div id="{{ !$loop->first ? 'more':'basic' }}" class=" row{{ !$loop->first ? ' collapse':'' }}">
                            @foreach($posterGroup as $poster)
                                <div class="col-12 py-4 col-lg-4 px-1">
                                    @include('poster.card')
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                @if($otherPosters->count()>1)
                    <div class="col-12 row justify-content-center   ">
                        <button class="button button--winona button--border-thin button--round-s"
                                data-text="{{ __('main.look_more') }}" data-toggle="collapse" data-target="#more">
                            <span>{{ __('main.look_more') }}</span></button>
                    </div>
                @endif
            </div>
            @include('partials.sidebar')

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

@extends('layouts.app')
@push('metas')
    <meta property="og:title" content="{{ __('main.title') }}" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-12 ">
                <h2 class="text-center">{{ __('main.searching_results') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-9">
                @if($searchResults->count())
                    @foreach($searchResults as $type=>$resultGroup)
                        <div>
                            @if($type == 'longread')
                                <p class="h4">Лонгриды</p>
                            @elseif($type == 'article')
                                <p class="h4">Статьи</p>
                            @elseif($type == 'new')
                                <p class="h4">Новости</p>
                            @else
                                <p class="h4">Дайджесты</p>
                            @endif
                            @include('articles.list', ['articles' => $resultGroup])
                        </div>
                    @endforeach
                @else
                    <h3>{{ __('main.not_find') }}</h3>
                @endif
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection


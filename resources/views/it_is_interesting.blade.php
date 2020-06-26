@extends('layouts.app')
<meta property="og:title" content="{{ App::isLocale('ru') ?  }}" />
<meta property="og:type" content="article">
<meta property="og:url" content="{{ request()->fullUrl() }}" />
<meta property="og:image" content="{{ asset('img/logo.svg') }}">
<meta property="og:site_name" content="Ummamag">
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('it_is_interesting') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <h2 class="text-center">{{ __('main.its_interesting') }}</h2>
                @include('articles.list')
            @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="row justify-content-center mt-5">
                    {{ $articles->appends(request()->query())->links() }}
                </div>
            @endif
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection

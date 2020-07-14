@extends('layouts.app')
@section('title')
    {{ __('main.vacancies')}}
@endsection
@push('metas')
<meta property="og:title" content="{{ __('main.vacancies')}}" />
<meta property="og:type" content="article">
<meta property="og:url" content="{{ request()->fullUrl() }}" />
<meta property="og:image" content="{{ asset('img/logo.svg') }}">
<meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('vacancies') }}

            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <h2 class="text-center">{{ __('main.vacancies') }}</h2>
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection

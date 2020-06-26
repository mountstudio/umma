@extends('layouts.app')
<meta property="og:title" content="{{ App::isLocale('ru') ? 'Вакансия' : '' }}" />
<meta property="og:type" content="article">
<meta property="og:url" content="{{ request()->fullUrl() }}" />
<meta property="og:image" content="{{ asset('img/logo.svg') }}">
<meta property="og:site_name" content="Ummamag">
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
                <h2 class="text-center">Вакансии</h2>
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection

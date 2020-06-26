@extends('layouts.app')
@push('metas')
    <meta property="og:title" content="{{ App::isLocale('ru') ? 'UMMA – мусульманский журнал, посвященный просвещению верующей молодежи.' : '' }}" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="">
        @include('partials.breadcrumbs', ['type' => 'home'])
        @include('blocks.news')
        @include('blocks.kolumnisti')
        @include('blocks.afisha')
        @include('blocks.different')
        @include('blocks.multimedia')
    </div>
    <div class="text-center">
        @include('blocks.our_projects')
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>
@endpush
@push('scripts')

@endpush


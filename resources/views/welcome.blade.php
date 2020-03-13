@extends('layouts.app')

@section('content')
    <div class="">
        {{ Breadcrumbs::render('home') }}
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
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}"/>--}}

@endpush
@push('scripts')

@endpush

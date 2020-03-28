@extends('layouts.app')

@section('content')
    <div class="">
        <div class="container bg-white">
            <div class="row">
                <div class="col-12 p-0">
                    {{ Breadcrumbs::render('home') }}
                </div>
            </div>
        </div>
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

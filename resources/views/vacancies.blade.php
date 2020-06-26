@extends('layouts.app')
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

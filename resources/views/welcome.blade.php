@extends('layouts.app')

@section('content')
    <div class="">
        <div class="container">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>
@endpush
@push('scripts')
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js"></script>--}}
@endpush

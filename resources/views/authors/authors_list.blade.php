@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">Спикок всех авторов</h2>
            <div class="col-12 col-lg-8">
                <div>
                    <img class="img-fluid" src="{{ asset('img/example-2.jpg') }}" alt="">
                    <p>Кадыр Маликов</p>
                    <img class="rounded-circle" style="width: 82px;height: 82px;"
                         src="{{ asset('storage/small/' . $kolumnist->photo) }}" alt="">
                    <h3 class="font-weight-bold h5 pt-2"
                        style="min-height: 56px;">{{ $kolumnist->full_name }}</h3>
                </div>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection

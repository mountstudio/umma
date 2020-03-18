@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Спикок всех авторов</h2>
                <div class="d-flex ">
                    <div>
                        <img class="rounded-circle" style="width: 122px;height: 122px;"
                             src="{{ asset('img/example-2.jpg') }}" alt="">
                    </div>
                    <div class="pt-5 px-2">
                        <h3 class="font-weight-bold h5 pt-2"
                            style="min-height: 56px;">Кубанов Тилек</h3>
                    </div>
                </div>
                <hr>
                <div class="d-flex ">
                    <div>
                        <img class="rounded-circle" style="width: 122px;height: 122px;"
                             src="{{ asset('img/example-2.jpg') }}" alt="">
                    </div>
                    <div class="pt-5 px-2">
                        <h3 class="font-weight-bold h5 pt-2"
                            style="min-height: 56px;">Кубанов Тилек</h3>
                    </div>
                </div>
                <hr>
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

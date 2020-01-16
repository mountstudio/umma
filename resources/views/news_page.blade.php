@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                <h2 class="text-center">О наболевшем</h2>
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                        <div class="col-6 pb-4">
                            <div class="card">
                                <img src="{{ asset('img/example-1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body pl-0">
                                    <div class="row m-0 text-white" >
                                        <p class=" col-auto small" style="border-bottom-right-radius: 15px;border-top-right-radius: 15px; background-color: #008500;margin-top: -2.10rem;">Интересное</p>
                                    </div>
                                    <h6 class="pl-3 text-left">Драпировка головы:</h6>
                                    <p class="pl-3 card-text">Манифест и целый мир мусульманки</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-4">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                @include('blocks.right-sidebar.articles-bar')
            </div>
        </div>
    </div>
@endsection

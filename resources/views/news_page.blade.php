@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                <h2 class="text-center">Новости</h2>
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                        <div class="col-6 pb-4">
                            @include('articles.card')
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

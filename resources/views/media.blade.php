@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="text-center">Медиа</h2>
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

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Хадисы</h2>
                <div class="row">
                    @foreach($hadiths as $hadith)
                        <div class="col-12">
                            <a href="{{ route('show.hadith', $hadith) }}">
                                <h4>{{ $hadith->name }}</h4></a>
                            <hr>
                            <div class="desc">
                                <p>{{ $hadith->content }}</p>
                            </div>
                        </div>
                    @endforeach
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
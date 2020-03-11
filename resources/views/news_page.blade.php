@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Новости</h2>
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-12 col-lg-6 col-md-4 pb-4">
                            <div class="card">
                                <img src="{{ asset('storage/small/' . $article->logo) }}" class="card-img-top"
                                     alt="...">
                                <div class="card-body pl-0">
                                    <div class="row m-0 text-white">
                                        @if($article->tags->count())
                                            <div class="row m-0 text-white">
                                                <p class=" col-auto small" style="border-bottom-right-radius: 15px;
                                                border-top-right-radius: 15px;
                                                background-color: #008500;margin-top: -2.10rem;">{{ $article->tags->take(2)->implode('name', ', ') }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <h6 class="pl-3 text-left">{{ $article->name }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        <div class="row justify-content-center mt-5">
                            {{ $articles->appends(request()->query())->links() }}
                        </div>
                    @endif
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

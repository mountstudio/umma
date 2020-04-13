@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('it_is_interesting') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Это интересно</h2>
                @foreach($articles->chunk(2) as $articleChunk)
                    @include('articles.card')
                @endforeach
            </div>
            @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="row justify-content-center mt-5">
                    {{ $articles->appends(request()->query())->links() }}
                </div>
            @endif
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

@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('articles') }}

            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            @include('partials.sidebar')
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Новости</h2>
                <div class="row">
                    @include('articles.list')
                </div>
                @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $articles->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('education') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h2 class="text-center">Просвещение</h2>
                @include('articles.list')
            @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="row justify-content-center mt-5">
                    {{ $articles->appends(request()->query())->links() }}
                </div>
            @endif
            </div>
            <div class="col-12 col-lg-3 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('partials.pray')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection

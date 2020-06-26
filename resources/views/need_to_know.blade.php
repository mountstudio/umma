@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('need_to_know') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <h2 class="text-center">{{ __('main.must_know') }}</h2>
                @include('articles.list')
            @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="row justify-content-center mt-5">
                    {{ $articles->appends(request()->query())->links() }}
                </div>
            @endif
            </div>
            <div class="col-12 col-lg-3 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="py-3">
                    @include('partials.pray')
                </div>
            </div>
        </div>
    </div>
@endsection

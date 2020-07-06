@extends('layouts.app')
@push('metas')
    <meta property="og:title" content="{{ __('main.authors') }}">
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    @include('partials.breadcrumbs', ['type' => 'authors'])
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8" id="hfjgkjlkhgfg">
                <h2 class="text-center">{{ __('main.author_list') }}</h2>
                <div class="row text-center">
                    @include('authors.list')
                </div>
                @if($authors instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="d-flex justify-content-center mt-5">
                        {{ $authors->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection

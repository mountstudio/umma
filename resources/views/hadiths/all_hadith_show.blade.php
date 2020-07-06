@extends('layouts.app')
@section('content')

    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('hadiths') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">{{ __('main.hadiths') }}</h2>
                <div class="row">
                    @foreach($hadiths as $hadith)
                        <div class="col-12">
                            <a href="{{ route('show.hadith', $hadith) }}">
                                <h4>{{ $hadith->name }}</h4></a>
                            <hr>
                            <div class="desc">
                                <p>{!! $hadith->content  !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($hadiths instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $hadiths->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('partials.pray')
                </div>
                <h2 class="text-center py-2">{{ __('main.article') }}</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection
@push('metas')
    <meta property="og:title" content="{{  __('main.all_hadis') }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush

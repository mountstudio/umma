 @extends('layouts.app')
 @push('metas')
     <meta property="og:title" content="{{ __('main.news') }}" />
     <meta property="og:type" content="article">
     <meta property="og:url" content="{{ request()->fullUrl() }}" />
     <meta property="og:image" content="{{ asset('img/logo.svg') }}">
     <meta property="og:site_name" content="Ummamag">
 @endpush
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
            <div class="col-12 col-lg-9">
                <h2 class="text-center">{{__('main.news')}}</h2>
                <div class="row">
                    @include('articles.list')
                </div>
                @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $articles->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
            @include('partials.sidebar')

        </div>
    </div>
@endsection
 @push('metas')
     <meta property="og:title" content="{{ __('main.all_news') }}">
     <meta property="og:type" content="article">
     <meta property="og:url" content="{{ request()->fullUrl() }}"/>
     <meta property="og:image" content="{{ asset('img/logo.svg') }}">
     <meta property="og:site_name" content="Ummamag">
 @endpush

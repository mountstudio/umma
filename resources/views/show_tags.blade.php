@extends('layouts.app')
@section('title')
    {{ App::isLocale('ru') ? $tag->name : $tag->name_kg }}
@endsection
@section('content')
    @push('metas')
        <meta property="og:title" content="{{ App::isLocale('ru') ? $tag->name : $tag->name_kg }}">
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ request()->fullUrl() }}"/>
        <meta property="og:image" content="{{ asset('img/logo.svg') }}">
        <meta property="og:site_name" content="Ummamag">
    @endpush
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('tag', $tag) }}

            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <div class="post-header d-flex justify-content-center">
                    <h2 class="title">
                        {{ __('main.all_articles_by_tag') }}
                    </h2>
                </div>
                <div class="row">
                    @include('articles.list',['articles' => $articlesByTag])
                </div>
                @if($articlesByTag instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $articlesByTag->appends(request()->query())->links() }}
                    </div>
                @endif
                @include('subscription.subscribe')
                @include('share.share_buttons')
            </div>
            <div class="col-12 col-lg-3 pb-3">
                <div class="py-3">
                    @include('partials.pray')
                </div>
                <h2 class="text-center py-2">{{ __('main.article') }}</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.social-share-btn').click(e => {
            let btn = $(e.currentTarget);
            let social = btn.data('social');
            let url = btn.data('url');

            if (social == 'facebook') {
                url = 'https://facebook.com/sharer/sharer.php?u=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            if (social == 'vk') {
                url = 'https://vk.com/share.php?url=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }

        })
    </script>
@endpush

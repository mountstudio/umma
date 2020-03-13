@extends('layouts.app')
@section('content')
    {{ Breadcrumbs::render('author', $author) }}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="author d-flex justify-content-between">
                    <p class="text-dark">Автор: {{ $author->full_name }}</p>
                </div>
                <div class="post-header d-flex">
                    <h2 class="title">
                        Все статьи автора
                    </h2>
                </div>
                <div class="row">
                    @foreach($articlesByAuthor as $article)
                        @include('articles.card')
                    @endforeach
                </div>
                @if($articlesByAuthor instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $articlesByAuthor->appends(request()->query())->links() }}
                    </div>
                @endif
                @include('subscription.subscribe')
                @include('share.share_buttons')
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

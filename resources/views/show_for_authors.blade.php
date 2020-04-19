@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('author', $author) }}

            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="post-header d-flex">
                    <h2 class="title">
                        Все статьи автора
                    </h2>
                </div>
                <div class="d-flex">
                    <div class="pr-2">
                        <img class="rounded-circle" style="width: 122px;height: 122px;"
                             src="{{ asset('storage/small/' . $author->photo) }}" alt="">
                    </div>
                    <div class="author pt-5 ">
                        <p class="text-dark font-weight-bold">{{ $author->full_name }}</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($articlesByAuthor->chunk(2) as $articleChunk)
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
                    @include('partials.pray')
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

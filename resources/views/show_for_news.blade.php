@extends('layouts.app')
@section('content')
    <div class="container">
        {{ Breadcrumbs::render('article', $article) }}
        <div class="row">
            <div class="col-12 col-lg-8">
                <nav aria-label="breadcrumb">
                </nav>
                <div class="author d-flex justify-content-between">
                    <p>Автор{{$article->authors->count()>1?'ы':'' }}:
                        @foreach($article->authors as $author)
                            <a href="{{ route('show.author', $author) }}">{{ $author->full_name . ($loop->last ? '' : ',') }} </a>
                        @endforeach
                    </p>
                    @if($article->photographers->count())
                    <p>Фотограф{{$article->photographers->count()>1?'ы':'' }}:
                        @foreach($article->photographers as $photographer)
                            <a>{{ $photographer->full_name . ($loop->last ? '' : ',') }} </a>
                        @endforeach
                    </p>
                    @endif
                    <span>{{$article->created_at->format('d.m.y')}}</span>
                </div>
                <div class="post-header d-flex py-2">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/news.png') }}" alt=""
                         style="width: 60px;height: 60px;">
                    <h2 class="title">
                        {{ $article->name }}
                    </h2>
                </div>
                <div class="py-2">
                    <img class="img-fluid" src="{{ asset('storage/medium/' . $article->logo) }}" alt="">
                </div>
                <div>
                    <p>{!! $article->content !!}</p>
                </div>
                <div class="tags">
                    <h5 class="widget-title">Теги:</h5>
                    @foreach($article->tags as $tag)
                        <a href="{{ route('show.tag', $tag) }}">{{  $tag->name . ($loop->last ? '' : ',') }} </a>
                    @endforeach
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')
                <section class="my-5">
                    @include('comments.comment')
                </section>
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

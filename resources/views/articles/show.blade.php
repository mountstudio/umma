@extends('layouts.app')
@section('content')
    @include('partials.breadcrumbs', ['type' => 'article', 'value' => $article])
    <div class="container bg-white">
        <div class="row justify-content-center">
            @if(is_null($article->banner))
                <div class="col-12 col-lg-9 pt-0">
                    <div class="col-12 col-lg-10 px-0">
                        <h1 class="title-for-article">{{ __($article->name) }}</h1>
                    </div>
                </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 pt-0">
                        <div class="row justify-content-center">
                            <img class="img-fluid" src="{{ asset('storage/large/' . $article->logo) }}" alt="">
                        </div>
                        <div class="title-article col-12 col-lg-7 px-0">
                            <h1 class="title-for-article">{{ __($article->name) }}</h1>
                        </div>
                    </div>
                    @endif

                    <div class="col-12 col-lg-9 pt-5">
                        <nav aria-label="breadcrumb ">
                        </nav>
                        <div class="author d-lg-flex d-md-flex d-block justify-content-between small">
                            @if($article->authors->count())
                                <p class="my-0">Автор{{$article->authors->count()>1?'ы':'' }}:
                                    @foreach($article->authors as $author)
                                        <a class="text-decoration-none text-orange"
                                           href="{{ route('show.author', $author) }}">{{ $author->full_name . ($loop->last ? '' : ',') }} </a>
                                    @endforeach
                                </p>
                            @endif
                            @if($article->photographers->count())
                                <p class=" my-0">Фотограф{{$article->photographers->count()>1?'ы':'' }}:
                                    @foreach($article->photographers as $photographer)
                                        <a class="">{{ $photographer->full_name . ($loop->last ? '' : ',') }} </a>
                                    @endforeach
                                </p>
                            @endif
                            <p class="text-orange">{{$article->created_at->format('d.m.y')}}</p>
                        </div>
                        <div class="post-header d-flex py-2">
                            <h4 class="title">
                                {{ __($article->name) }}
                            </h4>
                        </div>

                        {{--                <div class="py-2 text-center">--}}
                        {{--                    <img class="img-fluid" src="{{ asset('storage/medium/' . $article->logo) }}" alt="">--}}
                        {{--                </div>--}}
                        <div id="post-content">
                            <p>{!! $article->content !!}</p>
                        </div>
                        <div class="tags d-flex">
                            <h5 class="widget-title pr-2">Теги:</h5>
                            @foreach($article->tags as $tag)
                                <p><a class="text-decoration-none text-orange"
                                      href="{{ route('show.tag', $tag) }}">{{  $tag->name . ($loop->last ? '' : ',') }} </a>
                                </p>
                            @endforeach
                        </div>
                        @include('subscription.subscribe')
                        @include('share.share_buttons')
                        @if($otherArticles->count())
                            <div class="row">
                                <div class="col-12 text-center pb-5">
                                    <h3>Другие статьи</h3>
                                </div>
                            </div>
                        @endif
                        @foreach($otherArticles as $articleGroup)
                            <div id="{{ !$loop->first ? 'more':'basic' }}"
                                 class="row{{ !$loop->first ? ' collapse':'' }}">
                                @foreach($articleGroup as $otherArticle)
                                    @include('other.other_articles')
                                @endforeach
                            </div>
                        @endforeach
                        @if($otherArticles->count()>1)
                            <div class="col-12 row justify-content-center">
                                <button class="button button--winona button--border-thin button--round-s"
                                        data-toggle="collapse" data-target="#more" data-text="Показать еще">
                                    <span>Показать еще</span></button>
                            </div>
                        @endif
                        <section class="my-5">
                            @include('comments.comment')
                        </section>
                    </div>
                    @include('partials.sidebar')
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

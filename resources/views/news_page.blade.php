@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Новости</h2>
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-12 col-md-6 pb-4">
                            <div class="card">
                                <a href="{{ route('show.article', $article) }}" title="ссылка">
                                    <img src="{{ asset('storage/small/' . $article->logo) }}"
                                         class="card-img-top"
                                         alt="...">
                                </a>
                                <div class="card-body pl-0">
                                    @if($article->tags->count())
                                        <div class="row m-0 text-white">
                                            <p class=" col-auto small" style="border-bottom-right-radius: 15px;
                                                border-top-right-radius: 15px;
                                                background-color: #008500;margin-top: -2.10rem;">
                                                @foreach($article->tags as $tag)
                                                    @if($loop->index == 1)
                                                        <a href="" class="text-white"
                                                           target="_blank">{{ $tag->name }} </a>
                                                        @break
                                                    @endif
                                                    <a href="" class="text-white"
                                                       target="_blank">{{ $tag->name . ($loop->last ? '' : ', ') }} </a>
                                                @endforeach
                                            </p>
                                        </div>
                                    @endif
                                    <a href="{{ route('show.article', $article) }}" title="ссылка">
                                        <h6 class="pl-3 text-left">{{ $article->name }}</h6>
                                    </a>
                                </div>
                                <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0 m-0 p-0">
                                    <div class="ml-auto d-flex align-items-center">
                                        <img src="{{ asset('icons/eyes_iocn.png') }}" alt="">&nbsp;<span
                                                class="p-1">{{ $article->impressions }}</span>
                                        <img src="{{ asset('icons/comment.png') }}" alt=""><span
                                                class="p-1">{{ $article->comments->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $articles->appends(request()->query())->links() }}
                    </div>
                @endif
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

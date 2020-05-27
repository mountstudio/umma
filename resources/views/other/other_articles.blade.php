{{--<div class="col-12 col-md-4 pb-4">--}}
{{--    <div class="card">--}}
{{--        <a href="" title="ссылка">--}}
{{--            <img src="{{ asset('storage/medium/' . $otherArticle->logo ) }}"--}}
{{--                 class="card-img-top"--}}
{{--                 alt="...">--}}
{{--        </a>--}}
{{--        <div class="card-body pl-0">--}}
{{--            @if($otherArticle->tags->count())--}}
{{--                <div class="row m-0 text-white">--}}
{{--                    <p class=" col-auto small" style="border-bottom-right-radius: 15px;--}}
{{--                                                border-top-right-radius: 15px;--}}
{{--                                                background-color: #008500;margin-top: -2.10rem;">--}}
{{--                        @foreach($otherArticle->tags as $tag)--}}
{{--                            @if($loop->index == 1)--}}
{{--                                <a href="{{ route('show.tag', $tag) }}" class="text-white">{{ $tag->name }} </a>--}}
{{--                                @break--}}
{{--                            @endif--}}
{{--                            <a href="{{ route('show.tag', $tag) }}"--}}
{{--                               class="text-white">{{ $tag->name . ($loop->last ? '' : ', ') }} </a>--}}
{{--                        @endforeach--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <a href="" title="ссылка">--}}
{{--                <h6 class="pl-3 text-left desc-text-crop">{{ $otherArticle->name }}</h6>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0 m-0 p-0">--}}
{{--            <div class="ml-auto d-flex align-items-center">--}}
{{--                <img src="{{ asset('icons/eyes_iocn.png') }}" alt=""><span--}}
{{--                    class="p-1">{{ $otherArticle->impressions }}</span>--}}
{{--                <img src="{{ asset('icons/comment.png') }}" alt=""><span--}}
{{--                    class="p-1">{{ $otherArticle->comments->count()}}</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="col-12 col-md-4 pb-4 px-0">
<div class="card mx-1 shadow shadow-on-hover transition-200">
{{--    <div class="date">--}}
{{--        <div class="day">27</div>--}}
{{--        <div class="month">Mar</div>--}}
{{--    </div>--}}
    <div class="position-relative shadow-sm">
        <a href="{{ route('show.article', $otherArticle) }}" title="ссылка">
            <img src="{{ asset('storage/medium/' . $otherArticle->logo ) }}"
                 class="card-img-top"
                 alt="..." style="max-height: 200px; object-fit: cover;">
        </a>
        @if($article->tags->count())
            <div class="row m-0 text-white position-absolute" style="bottom: 0;">
                <p class="col-auto m-0 bg-orange font-weight-bold" style="background-color: #008500;">
                    @foreach($otherArticle->tags as $tag)
                        @if($loop->index == 1)
                            <a href="{{ route('show.tag', $tag) }}" class="text-white">{{ $tag->name }} </a>
                            @break
                        @endif
                        <a href="{{ route('show.tag', $tag) }}"
                           class="text-white">{{ $tag->name . ($loop->last ? '' : ', ') }} </a>
                    @endforeach
                </p>
            </div>
        @endif
    </div>


    <div class="card-body pt-3 pb-1 px-0">

        <a class="text-decoration-none" href="{{ route('show.article', $article) }}" title="ссылка">
            <h3 class="px-2 h6 text-left desc-text-crop font-weight-bold text-dark">{{ __($otherArticle->name) }}</h3>
        </a>
    </div>
    <a href="{{ route('show.article', $article) }}" class="card-footer text-dark text-decoration-none d-flex  bg-white border-0 pt-0 ">
        <div class="d-flex align-items-center">
            <i class="fas fa-eye text-orange"></i>&nbsp;<span
                class="pr-3 small">{{ $otherArticle->impressions }}</span>
            <i class="fas fa-comments text-orange"></i>&nbsp;<span
                class="pr-3 small">{{ $otherArticle->comments->count()}}</span>
        </div>
    </a>
</div>
</div>

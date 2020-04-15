<div class="col-12 col-lg-12 col-md-6 pb-4">
    <div class="card-deck">
        @foreach($articleChunk as $article)
            <div class="card mx-1 shadow">
                <div class="date">
                    <div class="day">27</div>
                    <div class="month">Mar</div>
                </div>
                <div class="position-relative">
                    <a href="{{ route('show.article', $article) }}" title="ссылка">
                        <img src="{{ asset('storage/medium/' . $article->logo) }}"
                             class="card-img-top"
                             alt="..." style="max-height: 200px; object-fit: cover;">
                    </a>
                    @if($article->tags->count())
                        <div class="row m-0 text-white position-absolute" style="bottom: 0;">
                            <p class="col-auto m-0 bg-orange font-weight-bold" style="background-color: #008500;">
                                @foreach($article->tags as $tag)
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
                    <a href="{{ route('show.article', $article) }}" title="ссылка">
                        <h3 class="px-2 h6 text-left desc-text-crop font-weight-bold text-dark">{{ __($article->name) }}</h3>
                    </a>
                </div>
                <div class="card-footer d-flex  bg-white border-0 pt-0 ">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-eye text-orange"></i>&nbsp;<span
                            class="pr-3 small">{{ $article->impressions }}</span>
                        <i class="fas fa-comments text-orange"></i>&nbsp;<span
                            class="pr-3 small">{{ $article->comments->count() }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

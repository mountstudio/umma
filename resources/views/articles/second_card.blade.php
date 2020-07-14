<div class="card border-0 shadow  shadow-on-hover transition-200 h-100">
    <div class="position-relative">
        <img src="{{ asset('storage/medium/' . $article->logo) }}"
             style="min-height: 150px; max-height: 150px; object-fit: cover;filter: brightness(80%);"
             class="card-img-top" alt="article_logo">
        @if($article->category)
            @if(App::isLocale('ru'))
                <p class="position-absolute text-white font-weight-bold"
                   style="top: 10px; left: 10px;">{{ $article->category->name }}</p>
            @else
                <p class="position-absolute text-white font-weight-bold"
                   style="top: 10px; left: 10px;">{{ $article->category->name_kg }}</p>
            @endif
        @endif
    </div>
    <div class="card-body py-2">
        <small
            class="text-muted font-weight-bold text-capitalize py-3">{{ \Carbon\Carbon::make($article->created_at)->formatLocalized('%b %d %Y') }}</small>
        <h3 class="h4 font-weight-bold card-title pt-3 m-0" style="display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;">{{ $article->name }}</h3>
        <p class="card-text small"
           style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{!! strip_tags($article->content) !!}</p>
    </div>
</div>

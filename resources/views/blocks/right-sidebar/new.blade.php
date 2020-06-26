<div class="default-block pt-2">
    <div class="default-header" style="">
        <h3 class="default-block__header-title" style="">{{ __('main.list_of_news') }}</h3>
    </div>
    <div class="default-block__content default-block__content_most-read">
        <ul class="content-list content-list_most-read">
            @foreach($articles_for_subblock as $key=>$article)
                <li class="content-list__item content-list__item_devided post-info">
                    <a href="{{ route('show.article', $article) }}"
                       class="text-decoration-none post-info__title">{{ $article->name }}</a>
                    <div class="post-info__meta">
                        <span class="post-info__meta-item">
                            <i class="fas fa-eye" style="color: #82a3b1;"></i>
                            <span class="pl-1 post-info__meta-counter post-info__meta-counter_small">{{ $article->impressions }}</span>
                        </span>
                        <a href="#" class="post-info__meta-item text-decoration-none">
                            <i class="fas fa-comments" style="color: #82a3b1;"></i>
                            <span class="pl-1 post-info__meta-counter post-info__meta-counter_small">{{ $article->comments->count() }}</span>
                        </a>
                        <a class="post-info__meta-item text-decoration-none"
                           href="{{ route('show.article', $article) }}">
                            <i class="far fa-clock" style="color: #82a3b1;"></i>
                            <span class="pl-1 post-info__meta-counter post-info__meta-counter_small">{{ $article->created_at->format('d.m') }}</span>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="row justify-content-end no-gutters p-3 ">
        <a href="{{ route('all.news') }}" class="pl-1 post-info__meta-counter post-info__meta-counter_small">{{ __('main.all_news') }}
            ...</a>
    </div>
</div>

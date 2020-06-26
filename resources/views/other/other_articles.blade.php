<div class="col-12 col-md-4  px-2 py-1 ">
    <div class="shadow shadow-on-hover transition-200">
        <div class="position-relative shadow-sm">
            <a class="text-decoration-none" href="{{ route('show.article', $otherArticle) }}" title="ссылка">
                <div class="d-flex align-items-end hover-card"
                     style="height: 200px;background-image: url({{ asset('storage/large/' . $otherArticle->logo) }});background-size: cover;background-position: center;">
                    <div class="col-12 px-0" style="background: rgba(0,0,0,0.5);">
                        <div class="card-body pt-3 pb-1 px-0">
                            @if($otherArticle->category)
                                <p class="px-2 mb-0 text-orange">
                                    {{ $otherArticle->category->name }}
                                </p>
                            @endif
                            <h2 class="px-2  text-left desc-text-crop font-weight-bold  text-white h5 mb-0">{{ __($otherArticle->name) }}</h2>
                        </div>
                        <div class="description-article-card text-white"
                             style="margin-top: 5px;display:none;line-height: 17px;font-weight: normal;">

                            <p class="px-2 small text-crop">{{ $otherArticle->desc }}</p>
                        </div>
                        <div class="d-flex align-items-center text-white px-2">
                            <i class="fas fa-eye text-for-orange"></i>&nbsp;<span
                                class="pr-3 small">{{ $otherArticle->impressions }}</span>
                            <i class="fas fa-comments text-for-orange"></i>&nbsp;<span
                                class="pr-3 small">{{ $otherArticle->comments->count() }}</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

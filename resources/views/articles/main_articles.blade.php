<div class="col-12">
    <ul class="nav nav-pills mb-0 text-dark" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link rounded-0 active bg-white border-right text-dark" id="pills-home-tab"
               data-toggle="pill"
               href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('main.fresh') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded-0 bg-white text-dark border-right" id="pills-profile-tab"
               data-toggle="pill"
               href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('main.relevant') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded-0 bg-white text-dark" id="pills-contact-tab" data-toggle="pill"
               href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">{{ __('main.theme_day') }}</a>
        </li>
    </ul>
</div>
<div class="tab-content col-12 py-4">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
            @include('articles.list', ['articles' => $articlesLatest])
        </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
            @include('articles.list', ['articles' => $articlesCommentLatest])
        </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
            @include('articles.list', ['articles' => $articlesDayTheme])
        </div>
    </div>
</div>

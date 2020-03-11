<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-5">
            @include('blocks.right-sidebar.new')
            <div class="pt-3">
                @include('blocks.right-sidebar.animation')
            </div>
        </div>
        {{--@php(--}}

        {{--)--}}
        <div class="col-12 col-lg-7">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-0 text-dark" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded-0 active bg-white border-right text-dark" id="pills-home-tab"
                               data-toggle="pill"
                               href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Свежее</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0 bg-white text-dark border-right" id="pills-profile-tab"
                               data-toggle="pill"
                               href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Актуальное</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0 bg-white text-dark" id="pills-contact-tab" data-toggle="pill"
                               href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Тема
                                дня</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-12 py-4">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @foreach($articlesLatest as $article)
                                @include('articles.card')
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @foreach($articlesCommentLatest as $article)
                                @include('articles.card')
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @foreach($articlesDayTheme as $article)
                                @include('articles.card')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@push('styles')

@endpush
@push('scripts')

@endpush

@extends('layouts.app')
@section('content')
    {{ Breadcrumbs::render('hadith', $hadith) }}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                {{--@include('breadcrumb.bread')--}}
                <div class="author d-flex justify-content-between">
                    <a class="text-dark" href="" target="_blank">Автор: Кадыр Маликов</a> <span>12.03.2020</span>
                </div>
                <div class="post-header d-flex">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/moon (1).png') }}" alt="">
                    <h1 class="title">
                        {{ $hadith->name }}
                    </h1>

                </div>
                <div class="author py-2">
                    Автор: <a href="" target="_blank">Кадыр Маликов</a>
                </div>
                <div class="pt-4">
                    <p>{!! $hadith->content !!}</p>
                </div>
                {{--                <div class="tags">--}}
                {{--                    <h3 class="widget-title">Теги:</h3>--}}
                {{--                </div>--}}
                <div class="d-flex py-2" style="background-color: #FFE8F8">
                    <a href="https://www.instagram.com/ummamagkg/"><img class="px-3"
                                                                        src="{{ asset('img/instagram-sketched (1).png') }}"
                                                                        alt=""></a>
                    <p class="p-1 m-0">Подписывайтесь на нашу страницу в <a href="https://www.instagram.com/ummamagkg/">Instagram</a>
                    </p>
                </div>
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
            let text = btn.data('text');

            if (social == 'facebook') {
                url = 'https://facebook.com/sharer/sharer.php?u=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            if (social == 'vk') {
                url = 'https://vk.com/share.php?url=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            // if (social == 'instagram') {
            //     window.open($(this).attr("href", 'https://vk.com/share.php?url=' + url), "popupWindow", "width=600,height=600,scrollbars=yes");
            // }
        })
    </script>
@endpush

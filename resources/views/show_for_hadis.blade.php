@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="post-header">
                    <img src="{{ asset('img/moon (1).png') }}" alt="" style="position: absolute">
                    <h1 class="title" style="position: relative;right: -13%;padding-top: 21px;">
                         Хадис №53
                    </h1>
                    <div class="author" style="padding-top: 6px;padding-left: 20px;">
                       Автор: <a href="" target="_blank">Кадыр Маликов</a>
                    </div>
                </div>

                <div class="pt-4">
                    <p>Пророк Мухаммад (да благословит его Творец и приветствует) сказал: «Воистину, главной целью моей пророческой миссии является доведение высоких нравов до полноты и совершенства»</p>
                </div>
{{--                <div class="tags">--}}
{{--                    <h3 class="widget-title">Теги:</h3>--}}
{{--                </div>--}}
                <div class="d-flex py-2" style="background-color: #FFE8F8">
                    <a href="https://www.instagram.com/ummamagkg/"><img class="px-3" src="{{ asset('img/instagram-sketched (1).png') }}" alt=""></a>
                    <p class="p-1 m-0">Подписывайтесь на нашу страницу в <a href="https://www.instagram.com/ummamagkg/">Instagram</a> </p>
                </div>
                <div class="post-share py-2 " >
                    <div class="text d-flex">
                        <img src="{{ asset('img/reading (1).png') }}" alt="" >
                        <p >Материал принес пользу? Поделитесь ссылкой с друзьями в социальных сетях.</p>
                    </div>

                    <div class="icons" style="position: relative;right: -9%;margin-top: -25px;">
                        <div class="" >
                            <a href="https://www.facebook.com/ummamag.kg"><i class="fab fa-facebook fa-lg text-orange mr-3"></i></a>
                            <a href="https://www.instagram.com/ummamagkg/"><i class="fab fa-instagram fa-lg text-orange mr-3"></i></a>
                            <a class="" href="/#vk" title="VK" rel="nofollow noopener" target="_blank">
                                <i class="fab fa-vk fa-lg text-orange mr-3"></i>
                            </a>

{{--                            <a href="javascript:void(0)" title="vk" class="social-share-btn" data-url="{{ request()->url() }}" data-social="vk" data-text="{{ $production->title ?? 'awdawd' }}" style="width: 30px;height: 30px;">--}}
{{--                                <i class="fab fa-vk mr-3 fa-lg nav-scale"></i>--}}
{{--                            </a>--}}
{{--                            --}}{{--                            <a href="javascript:void(0)" title="instagram" class="social-share-btn" data-url="{{ request()->url() }}" data-social="instagram" data-text="{{ $production->title }}" style="width: 30px;height: 30px;">--}}
{{--                            --}}{{--                                <i class="fab fa-instagram mr-3 fa-lg nav-scale"></i>--}}
{{--                            --}}{{--                            </a>--}}
{{--                            <a href="javascript:void(0)" title="facebook" class="social-share-btn" data-url="{{ request()->url() }}" data-social="facebook" data-text="{{ $production->title ?? 'awdawd' }}" style="width: 30px;height: 30px;">--}}
{{--                                <i class="fab fa-facebook mr-3 fa-lg nav-scale"></i>--}}
{{--                            </a>--}}

                        </div>
                    </div>
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

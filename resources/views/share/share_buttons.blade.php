<div class="post-share py-2 ">
    <div class="text d-flex">
        <img class="d-none d-lg-block p-2" src="{{ asset('img/reading (1).png') }}" alt="">
        <p>Материал принес пользу? Поделитесь ссылкой с друзьями в социальных сетях.</p>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}"><i
                class="fab fa-facebook fa-lg text-orange mr-3"></i></a>

        <a class="" href="https://vk.com/share.php?url={{ request()->fullUrl() }}" title="VK" rel="nofollow noopener" target="_blank">
            <i class="fab fa-vk fa-lg text-orange mr-3"></i>
        </a>

        {{--                        <a href="javascript:void(0)" title="vk" class="social-share-btn"--}}
        {{--                           data-url="{{ request()->url() }}" data-social="vk"--}}
        {{--                           data-text="{{ $production->title ?? 'awdawd' }}" style="width: 30px;height: 30px;">--}}
        {{--                            <i class="fab fa-vk mr-3 fa-lg nav-scale"></i>--}}
        {{--                        </a>--}}
        {{--                        <a href="javascript:void(0)" title="instagram" class="social-share-btn"--}}
        {{--                           data-url="{{ request()->url() }}" data-social="instagram"--}}
        {{--                           data-text="{{ $production->title }}" style="width: 30px;height: 30px;">--}}
        {{--                            <i class="fab fa-instagram mr-3 fa-lg nav-scale"></i>--}}
        {{--                        </a>--}}
        {{--                        <a href="javascript:void(0)" title="facebook" class="social-share-btn"--}}
        {{--                           data-url="{{ request()->url() }}" data-social="facebook"--}}
        {{--                           data-text="{{ $production->title ?? 'awdawd' }}" style="width: 30px;height: 30px;">--}}
        {{--                            <i class="fab fa-facebook mr-3 fa-lg nav-scale"></i>--}}
        {{--                        </a>--}}
    </div>
</div>

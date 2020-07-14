<div class="post-share py-2 ">
    <div class="text d-flex">
        <img class="d-none d-lg-block p-2" src="{{ asset('img/reading (1).png') }}" alt="interesting_articles">
        <p>{{ __('main.social_media') }} </p>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}"><i
                class="fab fa-facebook fa-lg text-orange mr-3"></i></a>

        <a class="" href="https://vk.com/share.php?url={{ request()->fullUrl() }}" title="VK" rel="nofollow noopener" target="_blank">
            <i class="fab fa-vk fa-lg text-orange mr-3"></i>
        </a>
    </div>
</div>

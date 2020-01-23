@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="col-8 px-0">
                    <h2 class="">Какой-то заголовок</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                    </ol>
                </nav>

                <p>Опубликовано: 22 ноября 2020 </p>
                <div>
                    <img src="{{ asset('img/example-1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="py-3">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet atque autem cumque
                        deleniti eius, fugit ipsam laboriosam minima quasi quidem quo, sit? Earum, facere, impedit.
                        Corporis enim est hic labore laudantium minus odio perferendis sapiente vero? Suscipit, totam!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae consequuntur
                        corporis fugiat illo iste, odit quaerat, quas sequi tempora veritatis vero. A assumenda,
                        molestias. Aliquam culpa distinctio exercitationem facere facilis inventore laudantium nemo
                        quibusdam vitae voluptates. Aperiam commodi, delectus dicta iste nam nemo omnis quas quibusdam
                        repellat tenetur vel veritatis, voluptatem voluptatum. Ab accusamus animi dolor labore unde!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur dolorum et, iusto
                        laborum laudantium, magnam maiores non odio optio reiciendis, tenetur veniam. Accusantium
                        aliquid asperiores consectetur consequatur delectus distinctio dolor dolore ducimus eligendi
                        error ex excepturi exercitationem fugit impedit ipsum laborum magni maiores molestiae molestias,
                        nam nisi numquam officiis pariatur quaerat quasi quis sapiente sint sit suscipit vitae. A,
                        assumenda aut blanditiis commodi culpa cupiditate delectus esse inventore iste laboriosam
                        laudantium, numquam, officiis pariatur possimus qui quibusdam quod sint sunt unde voluptatibus!
                        Accusamus aliquam, commodi eaque et fugiat inventore optio recusandae sit tenetur velit veniam
                        voluptas voluptates voluptatibus voluptatum.
                    </p>
                </div>
                <div>
                    <span>Теги:</span>
                    <a href="">Мечеть</a>
                    <a href="">Безопасность</a>
                    <a href="">Права человека</a>
                </div>
                <div class="col-auto align-self-start">
                    <div class="share_customer">
                        <span class="span_share font-weight-bold">Поделиться:</span>
                        <div class="social_buttons" style="padding: 4px">
                            <a href="javascript:void(0)" title="vk" class="social-share-btn"  style="width: 30px;height: 30px;">
                                <i class="fab fa-vk mr-3 fa-lg nav-scale"></i>
                            </a>
                            {{--                            <a href="javascript:void(0)" title="instagram" class="social-share-btn" data-url="{{ request()->url() }}" data-social="instagram" data-text="{{ $production->title }}" style="width: 30px;height: 30px;">--}}
                            {{--                                <i class="fab fa-instagram mr-3 fa-lg nav-scale"></i>--}}
                            {{--                            </a>--}}
                            <a href="javascript:void(0)" title="facebook" class="social-share-btn" style="width: 30px;height: 30px;">
                                <i class="fab fa-facebook mr-3 fa-lg nav-scale"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                @include('blocks.right-sidebar.articles-bar')
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

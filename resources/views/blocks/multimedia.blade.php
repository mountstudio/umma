<div class="container-fluid px-5">
    <h2 class="text-uppercase">Мультимедиа</h2>
    <div class="row">
        <div class="col-12 p-4 bg-orange">
            <div class="multimedia">
                @foreach($multimedia as $media)
                    <div class="item border bg-for-image p-1 mr-1 position-relative">
                        <a href=""><img class="img-fluid position-relative" src="{{ asset('storage/medium/' . $media->url_photo) }}" alt=""></a>
                        <a href=""><img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute"
                                        style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt=""></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{--<a class="fancybox-media" href="https://www.youtube.com/watch?time_continue=3&v=xTYkmWnwLvg">--}}
{{--    <div class="position-relative">--}}
{{--        <img src="" data-src="{{ asset('img/video.png') }}" class="img-fluid div-lazy w-100 position-relative" alt="">--}}
{{--        <img src="" data-src="{{asset('img/youtube(2).png')}}" class="youtube div-lazy  position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%); " alt="">--}}
{{--    </div>--}}
{{--</a>--}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // slick carousel
            $('.multimedia').slick({
                autoplay: true,
                autoplaySpeed: 30000,
                slidesToShow: 3,
                slidesToScroll: 1,

                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,


                    }

                },  {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,

                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },

                }],
                    nextArrow: '<i class="fas fa-chevron-right icon-arrow-right fa-2x"></i>',
                    prevArrow: '<i class="fas fa-chevron-left icon-arrow-left fa-2x"></i>'

            });

        });
    </script>
@endpush

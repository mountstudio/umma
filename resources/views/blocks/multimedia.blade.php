<div class="container bg-white px-5">
    <h2 class="text-uppercase text-center">Мультимедиа</h2>
    <div class="row">
        <div class="col-12 p-4 bg-orange">
            <div class="multimedia">
                @foreach($multimedia as $media)
                    <div class="item  p-1 mr-1 position-relative">
                        <a class="fancybox-media1" href="{{ $media->url_video }}">
                            <img class="border border-white  img-multimedia  position-relative"
                                 src="{{ asset('storage/medium/' . $media->url_photo) }}" alt=""
                                 style="border-width: 5px!important;">
                            <img src="{{ asset('img/play-button.svg') }}" class="img-fluid position-absolute"
                                 style="left: 50%; top: 50%; transform: translate(-50%, -50%);width: 27%;height: 27%;"
                                 alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@push('styles')

    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <style>
        .img-multimedia {
            width: 100%;
            height: 140px;
        }

        @media (min-width: 574px) {
            .img-multimedia {
                width: 100%;
                height: 100px;
            }
        }

        @media (min-width: 767px) {
            .img-multimedia {
                width: 100%;
                height: 110px;
            }
        }

        @media (min-width: 990px) {
            .img-multimedia {
                width: 100%;
                height: 150px;
            }
        }

        @media (min-width: 1200px) {
            .img-multimedia {
                width: 100%;
                height: 190px;
            }
        }
    </style>
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

                }, {
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
                nextArrow: '<i class="fas fa-chevron-right icon-arrow-right fa-2x text-white"></i>',
                prevArrow: '<i class="fas fa-chevron-left icon-arrow-left fa-2x text-white"></i>'

            });

        });
    </script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script>
        $('.fancybox-media1').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });
    </script>
@endpush

<div class="container-fluid px-5">
    <h2 class="text-uppercase">Мультимедиа</h2>
    <div class="row">
        <div class="col-12 bg-orange">
            <div class="multimedia">
                <div class="item border bg-for-image p-1 mr-1 position-relative">
                    <img class="img-fluid position-relative" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image p-1 mr-1 position-relative">
                    <img class="img-fluid position-relative" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image p-1 mr-1 position-relative">
                    <img class="img-fluid position-relative" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image p-1 mr-1 position-relative">
                    <img class="img-fluid position-relative" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image p-1 mr-1 position-relative">
                    <img class="img-fluid position-relative" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image p-1 mr-1 position-relative">
                    <img class="img-fluid position-relative" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image  p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-1.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border  bg-for-image p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-2.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
                <div class="item border bg-for-image  p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-3.jpg') }}" alt="">
                    <img src="{{ asset('img/ui.png') }}" class="img-fluid position-absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" alt="">
                </div>
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
                arrows: true,
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>'
            });

        });
    </script>
@endpush

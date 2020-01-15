<div class="container-fluid px-5">
    <h2 class="text-uppercase">Мультимедиа</h2>
    <div class="row">
        <div class="col-12" style="background-color: orangered">
            <div class="multimedia">
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-1.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-2.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-3.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-1.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-2.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-3.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-1.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-2.jpg') }}" alt="">
                </div>
                <div class="item border p-1 mr-1">
                    <img class="img-fluid" src="{{ asset('img/example-3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

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
                autoplaySpeed: 3000,
                slidesToShow: 3,
                slidesToScroll: 1,
            });

        });

    </script>
@endpush

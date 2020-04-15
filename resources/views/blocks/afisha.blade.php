<div class="container bg-white pt-3 my-5">
    <div class="col pr-3">
        <h2 class="text-uppercase"><a class="text-dark" href="{{ route('all.posters') }}">Афиша</a></h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row afisha-carousel">

                    @foreach($posters as $poster)
                        <div class="col-12 col-md-6 col-lg-3 mb-2 mb-lg-0">
                            @include('poster.card')
                        </div>
                    @endforeach




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
            $('.afisha-carousel').slick({
                autoplay: true,
                autoplaySpeed: 30000,
                slidesToShow: 4,
                slidesToScroll: 1,

                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
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
                nextArrow: '<i class="fas fa-chevron-right icon-arrow-right fa-2x"></i>',
                prevArrow: '<i class="fas fa-chevron-left icon-arrow-left fa-2x"></i>'

            });

        });
    </script>
@endpush

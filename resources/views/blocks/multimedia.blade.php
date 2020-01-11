<div class="container-fluid">
    <h2 class="text-uppercase">Мультимедиа</h2>
    <div class="row justify-content-center position-relative ">
        <div id="multimedia" class="owl-carousel owl-theme col-12 col-md-10 col-lg-8">
            <div class="item">
                <img src="{{ asset('img/vilage.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/vilage.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/vilage.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/vilage.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/vilage.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('img/vilage.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script>
        $('#multimedia').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navigation: true,
            dots: false,
            touchDrag: true,
            responsive: {
                0: {
                    items: 1
                },
            },
            autoplay: true,
            autoplayTimeout: 6000,
            adaptiveHeight: true,
        })
    </script>
@endpush

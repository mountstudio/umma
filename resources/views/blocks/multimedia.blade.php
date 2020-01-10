<div class="container-fluid">
    <h2 class="text-uppercase">Мультимедиа</h2>
    <div class="row">
        <div class="col-12">
            <div id="owl-video-carousel" class="owl-carousel owl-theme">
{{--                <div class="item">--}}
{{--                    <img class=" " src="{{ asset('img/example-1.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img class=" " src="{{ asset('img/example-1.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img class=" " src="{{ asset('img/example-1.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img class=" " src="{{ asset('img/example-1.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img class=" " src="{{ asset('img/example-1.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img class=" " src="{{ asset('img/example-1.jpg') }}" alt="">--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script>
        $('#owl-video-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items: 4,
        })
    </script>
@endpush

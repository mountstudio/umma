@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="author d-flex justify-content-between">
                    <p>Автор: Саймудин Ибн Зараб
                    </p>
                    <p>
                        Фотограф: Дамир Дамирович
                    </p>
                    <span>23.03.2020</span>
                </div>
                <div>
                    <p>Дата окончания события: 26.04.2020</p>
                </div>
                <div class="post-header d-flex py-2">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/news.png') }}" alt=""
                         style="width: 60px;height: 60px;">
                    <h2 class="title">
                        Имя автора поста
                    </h2>
                </div>
                <div class="py-2">
                    <img class="img-fluid" src="{{ asset('img/example-2.jpg') }}" alt="">
                </div>
                <div>
                    <p>Какой-то контент</p>
                </div>
                <div class="tags">
                    <h5 class="widget-title">Теги:</h5>
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')
                <section class="my-5">
{{--                    @include('comments.comment')--}}
                </section>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script>
        $('.fancybox-media').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });
    </script>
@endpush

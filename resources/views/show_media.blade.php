@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <nav aria-label="breadcrumb">
                </nav>
                <div class="author d-flex justify-content-between">
                    <span>345345</span>
                </div>
                <div class="post-header d-flex py-2">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/youtube (3).png') }}" alt=""
                         style="width: 60px;height: 60px;">
                    <h2 class="title">
                        sdfsdfsdfsdf
                    </h2>
                </div>
                <div class=" bg-img pb-5">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?time_continue=3&v=xTYkmWnwLvg">
                        <div class="position-relative">
                            <img src="{{ asset('img/example-2.jpg') }}" class="img-fluid  w-100 position-relative" alt="">
                            <img src="{{asset('img/youtube (3).png')}}" class="youtube  position-absolute"
                                 style="left: 50%; top: 50%; transform: translate(-50%, -50%); " alt="">
                        </div>
                    </a>
                </div>
                <div class="d-flex py-2" style="background-color: #FFE8F8">
                    <a href="https://www.instagram.com/ummamagkg/"><img class="px-3"
                                                                        src="{{ asset('img/instagram-sketched (1).png') }}"
                                                                        alt=""></a>
                    <p class="p-1 m-0">Подписывайтесь на нашу страницу в <a href="https://www.instagram.com/ummamagkg/">Instagram</a>
                    </p>
                </div>
                <div class="d-flex py-2" style="background-color: #FFE8F8">
                    <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be"><img class="px-3"
                                                                        src="{{ asset('img/youtube (4).png') }}"
                                                                        alt=""></a>
                    <p class="p-1 m-0">Подписывайтесь на нашу страницу в <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be">Youtube</a>
                    </p>
                </div>
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


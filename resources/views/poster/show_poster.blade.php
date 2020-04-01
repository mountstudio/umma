@extends('layouts.app')
@section('content')
    {{ Breadcrumbs::render('poster', $poster) }}
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div>
                    <p>Дата события: 26.04.2020</p>
                </div>
                <div class="post-header d-flex py-2">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/news.png') }}" alt=""
                         style="width: 60px;height: 60px;">
                    <h2 class="title">
                        {{ $poster->name }}
                    </h2>
                </div>
                <div class="py-2">
                    <img class="img-fluid" src="{{ asset('storage/medium/' . $poster->main_photo) }}" alt="">
                </div>
                <div>
                    <p>{!! $poster->content !!}</p>
                </div>
                <div class="tags">
                    @if($poster->type->count())
                        <h5 class="widget-title">Тип: {{ $poster->type->name }} </h5>
                    @endif
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')
                {{--<section class="my-5">--}}
                    {{--                    @include('comments.comment')--}}
                {{--</section>--}}
                <div class="row">
                    <div class="col-12 text-center pb-5">
                        <h3>Другие статьи</h3>
                    </div>
                    @for($i=0;$i<2;$i++)
                        @include('other.other_poster')
                    @endfor
                    <div class="col-12 row justify-content-center   ">
                        <button class="button button--winona button--border-thin button--round-s" data-text="Показать еще"><span>Показать еще</span></button>
                    </div>
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

@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('multimedia') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    @foreach($multimedia as $media)
                        <div class="col-12 col-lg-6 py-2">
                            <div class="card">
                                <a class="fancybox-media" href="{{ $media->url_video }}" title="ссылка">
                                    <img src="{{ asset('storage/medium/' . $media->url_photo ) }}"
                                         class="card-img-top"
                                         alt="...">
                                </a>
                                    <a href="{{ route('show.media', $media) }}" title="ссылка">
                                        <h6 class="text-left">{{ $media->title }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('partials.pray')
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

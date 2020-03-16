@extends('layouts.app')
@section('content')
    {{ Breadcrumbs::render('multimedia') }}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    @foreach($multimedia as $media)
                        <div class="col-12 col-lg-4 py-2">
                            <div class="card">
                                <a href="{{ route('show.media', $media) }}" title="ссылка">
                                    <img src="{{ asset('storage/medium/' . $media->url_photo ) }}"
                                         class="card-img-top"
                                         alt="...">
                                </a>
                                <div class="card-body ">
                                    <a href="" title="ссылка">
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
                    @include('blocks.right-sidebar.animation')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection

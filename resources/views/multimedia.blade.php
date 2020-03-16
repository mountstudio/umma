@extends('layouts.app')
@section('content')
    {{ Breadcrumbs::render('multimedia') }}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    @for($i=0;$i<6;$i++)
                        <div class="col-12 col-lg-4 py-2">
                            <div class="card">
                                <a href="" title="ссылка">
                                    <img src="{{ asset('img/example-2.jpg' ) }}"
                                         class="card-img-top"
                                         alt="...">
                                </a>
                                <div class="card-body ">
                                    <a href="" title="ссылка">
                                        <h6 class="text-left">dfgdfgdfgdfg</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
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

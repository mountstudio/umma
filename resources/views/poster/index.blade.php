@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('posters') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-12 col-lg-8">
                <h2>Список всех постов</h2>
            </div>
        </div>
        <div class="row">
            @include('partials.sidebar')
            <div class="col-12 col-lg-8 justify-content-between row">
                @foreach($posters as $poster)
                    <div class="col-6 mb-3">
                        @include('poster.card')
                    </div>
                @endforeach
                <div class="col-12">
                    @if($posters instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        <div class="row justify-content-center mt-5">
                            {{ $posters->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection


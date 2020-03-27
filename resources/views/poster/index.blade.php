@extends('layouts.app')
@section('content')
    {{ Breadcrumbs::render('posters') }}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>Список всех постов</h2>
                @foreach($posters as $poster)
                    <a href="#">@include('poster.card')</a>
                @endforeach
            @if($posters instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="row justify-content-center mt-5">
                    {{ $posters->appends(request()->query())->links() }}
                </div>
            @endif
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


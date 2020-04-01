@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('authors') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Спикок всех авторов</h2>
                @foreach($authors as $author)
                    <div class="d-flex ">
                        <div>
                            <img class="rounded-circle" style="width: 122px;height: 122px;"
                                 src="{{ asset('storage/small/' . $author->photo) }}" alt="">
                        </div>
                        <a href="{{ route('show.author', $author) }}">
                            <div class="pt-5 px-2">
                                <h3 class="font-weight-bold h5 pt-2"
                                    style="min-height: 56px;">{{ $author->full_name }}</h3>
                            </div>
                        </a>
                    </div>
                    <hr>
                @endforeach
                @if($authors instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="row justify-content-center mt-5">
                        {{ $authors->appends(request()->query())->links() }}
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

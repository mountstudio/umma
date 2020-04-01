@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('magazine', $magazine) }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2>Журнал</h2>
                <iframe src="{{ asset('storage/pdf/' . $magazine->pdf) }}" height="700" width="700"></iframe>
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


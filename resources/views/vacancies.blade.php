@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ Breadcrumbs::render('vacancies') }}

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Вакансии</h2>

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

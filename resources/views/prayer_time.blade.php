@extends('layouts.app')
@section('title')
    {{ __('main.prayer_time') }}
@endsection
@section('content')
    @php
        $ru_week = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресение'];
        $kg_week = ['Дүйшөмбү','Шейшемби','Шаршемби','Бейшемби','Жума','Ишемби','Жекшемби'];
    @endphp
    @push('metas')
        <meta property="og:title" content="{{ __('main.prayer_time') }}" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ request()->fullUrl() }}" />
        <meta property="og:image" content="{{ asset('img/logo.svg') }}">
        <meta property="og:site_name" content="Ummamag">
    @endpush
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('prayer_time') }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10">
                <h2 class="text-center">{{ __('main.prayer_time') }}</h2>
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle  "
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('main.select_city') }}
                </button>
                <div class="dropdown-menu pb-0 py-2" aria-labelledby="btnGroupDrop1">
                    <div class="nav nav-tabs" id="myTab">
                        <a class="dropdown-item active py-2" id="bishkek-tab" data-toggle="tab" role="tab"
                           aria-controls="bishkek" aria-selected="false" href="#bishkek">Бишкек</a>
                        <a class="dropdown-item" id="ik-tab" data-toggle="tab" role="tab" aria-controls="ik"
                           aria-selected="false" href="#ik">Иссык-куль</a>
                        <a class="dropdown-item" id="talas-tab" data-toggle="tab" role="tab"
                           aria-controls="talas" aria-selected="false" href="#talas">Талас</a>
                        <a class="dropdown-item" id="naryn-tab" data-toggle="tab" role="tab"
                           aria-controls="naryn" aria-selected="false" href="#naryn">Нарын</a>
                        <a class="dropdown-item" id="ja-tab" data-toggle="tab" role="tab" aria-controls="ja"
                           aria-selected="false" href="#ja">Джалал-абад</a>
                        <a class="dropdown-item" id="osh-tab" data-toggle="tab" role="tab" aria-controls="osh"
                           aria-selected="false" href="#osh">Ош</a>
                        <a class="dropdown-item" id="batken-tab" data-toggle="tab" role="tab"
                           aria-controls="batken" aria-selected="false" href="#batken">Баткен</a>
                    </div>
                </div>
                <div class="tab-content pt-3" id="myTabContent">
                    @foreach($table as $key=>$city)
                        <div class="tab-pane fade {{$loop->index == 0 ? 'show active':''}}" id="{{ $key }}"
                             role="tabpanel"
                             aria-labelledby="{{ $key }}-tab">
                            <h3 class="text-center">{{ $cities[$loop->index] }}</h3>
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-transform: capitalize">{{ \Carbon\Carbon::now()->locale('ru')->shortMonthName }}</th>
                                    <th scope="col">Д/н</th>
                                    <th scope="col">Фаджр</th>
                                    <th scope="col">Шурук</th>
                                    <th scope="col">Зухр</th>
                                    <th scope="col">Аср</th>
                                    <th scope="col">Магриб</th>
                                    <th scope="col">Иша</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($city as $key => $day)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        @if(App::isLocale('ru'))
                                            <td> {{ $ru_week[date('N', strtotime(date('Y-m-' . ($key + 1))))-1] }}</td>
                                        @else
                                            <td> {{ $kg_week[date('N', strtotime(date('Y-m-' . ($key + 1))))-1] }}</td>
                                        @endif
                                        @foreach($day as $time)
                                            <td>{{ $time }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-3 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="py-3">
                    @include('partials.pray')
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('prayer_time') }}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Время намаза</h2>
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle  "
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Выбрать город
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
                <div class="tab-content" id="myTabContent">
                    @foreach($table as $key=>$city)
                        <div class="tab-pane fade {{$loop->index == 0 ? 'show active':''}}" id="{{ $key }}"
                             role="tabpanel"
                             aria-labelledby="{{ $key }}-tab">
                            <h3>{{ $cities[$loop->index] }}</h3>
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">{{ strftime('%b') }}</th>
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
                                        <td>{{ strftime('%A', strtotime(date('Y-m-' . ($key + 1)))) }}</td>
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

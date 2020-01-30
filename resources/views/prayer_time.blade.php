@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">Время намаза</h2>
        <div class="row">
            <div class="col-12 col-lg-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                           aria-controls="pills-home" aria-selected="true">Сегодня</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                           aria-controls="pills-profile" aria-selected="false">На месяц</a>
                    </li>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Выбрать город
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Бишкек</a>
                            <a class="dropdown-item" href="#">Dropdown link</a>
                        </div>
                    </div>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        @include('blocks.right-sidebar.animation')
                    </div>
                    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">Дата</th>
                                <th scope="col">Д/н</th>
                                <th scope="col">Last</th>
                                <th scope="col">Фаджр</th>
                                <th scope="col">Шурук</th>
                                <th scope="col">Зухр</th>
                                <th scope="col">Магриб</th>
                                <th scope="col">Иша</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Понедельник</td>
                                <td>06:59</td>
                                <td>08:59</td>
                                <td>12:33</td>
                                <td>14:18</td>
                                <td>16:07</td>
                                <td>16:07</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Вторник</td>
                                <td>06:59</td>
                                <td>08:59</td>
                                <td>12:33</td>
                                <td>14:18</td>
                                <td>16:07</td>
                                <td>16:07</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Среда</td>
                                <td>06:59</td>
                                <td>08:59</td>
                                <td>12:33</td>
                                <td>14:18</td>
                                <td>16:07</td>
                                <td>16:07</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        ...
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                @include('blocks.right-sidebar.articles-bar')
            </div>
        </div>
    </div>
@endsection

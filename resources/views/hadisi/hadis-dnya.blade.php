@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Хадисы</h2>
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                        <div class="col-12">
                            <a href="{{ route('hadis-show') }}"><h4>Хадисы о количестве воды для омовения</h4></a>
                            <hr>
                            <div class="desc">
                                <p>Тем, кто тратит много воды и времени на совершение малого или полного омовения,
                                    легкомысленно расточительствуя либо проявляя «особую» набожность, что, по сути, есть
                                    результат дьявольских нашептываний («недостаточно помыл», «не тщательно отмыл»),
                                    полезно
                                    знать и строго принять во внимание следующий достоверный хадис. Супруга пророка
                                    Мухаммада...</p>
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

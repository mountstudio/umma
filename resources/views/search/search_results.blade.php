@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Результаты поиска</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-9">
                @if($searchResults->count())
                    @foreach($searchResults as $type=>$resultGroup)
                        <div>
                            @if($type == 'longread')
                                <p class="h4">Лонгриды</p>
                            @elseif($type == 'article')
                                <p class="h4">Статьи</p>
                            @else
                                <p class="h4">Дайджесты</p>
                            @endif
                            @include('articles.list', ['articles' => $resultGroup])
                        </div>
                    @endforeach
                @else
                    <h3>Ничего не найдено!</h3>
                @endif
            </div>
            @include('partials.sidebar')
        </div>
    </div>
@endsection


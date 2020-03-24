@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Результаты поиска</h2>
                @foreach($searchResults as $type=>$resultGroup)
                    <div>
                        @if($type == 'longread')
                            <p>Лонгриды</p>
                        @elseif($type == 'article')
                            <p>Статьи</p>
                        @else
                            <p>Дайджесты</p>
                        @endif
                        @foreach($resultGroup as $article)
                            <div class="col">
                                @include('articles.card')
                            </div>
                        @endforeach
                    </div>
                @endforeach
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


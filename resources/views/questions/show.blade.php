@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('question', $question) }}
            </div>
            <div class="col-12 col-lg-8">
                <div class="text-right">
                    <span class="text-orange   font-weight-bold">{{ $question->is_anonim ? 'Анонимно' : $question->full_name }} / {{\Carbon\Carbon::make($question->created_at)->formatLocalized('%d %B %Y') }}</span>
                </div>
                <div class="text-center">
                    <span class="text-orange h5  font-weight-bold">Категория вопроса: {{ $question->category->name }}</span>
                </div>
                <p class="text-dark"><span class="pr-2 h5">Вопрос:</span>{{ $question->content }}</p>

                <hr>
                <p class="text-dark"><span class="pr-2 h5">Ответ:</span>{{ $question->answer }}</p>
                <div class="text-right">
                    <span class="text-orange text-right  font-weight-bold">Кадыр маликов</span>
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


@extends('layouts.app')
@push('metas')
    <meta property="og:title" content="{{ $question->name }}" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('question', $question) }}
            </div>
            <div class="col-12 col-lg-9">
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
            @include('partials.sidebar')
        </div>
    </div>
@endsection


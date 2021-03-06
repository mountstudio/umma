@extends('layouts.app')
@section('title')
    {{ __('main.question_to_the_scientist') }}
@endsection
@section('content')
    @push('metas')
        <meta property="og:title" content="{{ __('main.question_to_the_scientist') }}" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ request()->fullUrl() }}" />
        <meta property="og:image" content="{{ asset('img/logo.svg') }}">
        <meta property="og:site_name" content="Ummamag">
    @endpush
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('questions') }}
            </div>
            <div class="col-12 col-lg-9">
                <h2 class="text-center">Ученые</h2>
                <hr style="background-color: black;color: black;">
                <h4 class="text-center">Задайте свой вопрос</h4>
                <p>Уважаемые посетители сайта, здесь вы можете задать свой вопрос имаму. На вопросы отвечает Кадыр
                    Маликов.
                    Перед заполнением формы убедитесь, что данный вопрос еще не публиковался на сайте. Для этого
                    воспользуйтесь формой поиска вопросов справа. Для вашего удобства все вопросы помечены специальными
                    тегами. Благодаря тегам вы сможете быстро отыскать вопросы на интересующую вас тему.</p>
                <form action="{{ route('user.question.store') }}" method="POST">
                    @csrf
                    @if(!Auth::user())
                        <div class="form-group">
                            <label for="full_name_input">Ваше имя</label>
                            <input type="text" class="form-control" id="full_name_input" placeholder="Имя"
                                   name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="mail_input">Email</label>
                            <input type="email" class="form-control" id="mail_input"
                                   placeholder="name@example.com" name="mail" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_input">Телефонный номер:</label>
                            <input type="text" class="form-control" id="phone_input"
                                   placeholder="+996220433443" name="phone" required>
                        </div>
                        <input hidden name="user_id" value="0">
                    @else
                        <input hidden name="user_id" value="{{ Auth::user()->id }}">
                    @endif
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="is_anonim">
                        <label class="form-check-label" for="inlineCheckbox1">Скрыть имя</label>
                    </div>
                    <div class="form-group">
                        <label for="_input">Кратко о вопросе:</label>
                        <input type="text" class="form-control" id="name_input"
                               placeholder="вопрос о работе" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="category_select">Категория вопроса:</label>
                        <select id="category_select" class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ App::isLocale('ru') ? $category->name:$category->name_kg }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content_area">Ваше сообщение</label>
                        <textarea class="form-control" id="content_area" rows="3" name="content"></textarea>
                    </div>
                    <div class="row justify-content-center">
                        <button class="button button--nina button--text-thick button--text-upper button--size-s"
                                data-text="Отправить">
                            <span>О</span><span>т</span><span>п</span><span>р</span><span>а</span><span>в</span><span>и</span><span>т</span><span>ь</span>
                        </button>
                    </div>
                </form>
                <div class="text-md-left text-sm-center border-question  pt-5">
                    <h2 class="text-center  ">Список всех вопросов</h2>
                    @foreach($questions as $question)
                        <a href="{{ route('show.question', $question) }}" style="text-decoration:none;">
                            <div class="p-3 border my-4">
                                <div class="text-left">
                                    <span class="text-orange  font-weight-bold">Категория вопроса: {{ App::isLocale('ru') ? $question->category->name:$question->category->name_kg }}</span>
                                </div>
                                <p class="text-dark"><span class="pr-2 h5">В:</span>{{ $question->content }}</p>
                                <div class="text-center">
                                    <span class="text-orange text-right  font-weight-bold">{{ $question->is_anonim ? 'Анонимно' : $question->full_name }}
                                        / {{\Carbon\Carbon::make($question->created_at)->formatLocalized('%d %B %Y') }}</span>
                                </div>
                                <hr>
                                <p class="text-dark"><span class="pr-2 h5">О:</span>{{ $question->answer }}</p>
                                <div class="text-right">
                                    <span class="text-orange text-right  font-weight-bold">Кадыр маликов</span>
                                </div>

                            </div>
                        </a>
                    @endforeach
                    @if($questions instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        <div class="row justify-content-center mt-5">
                            {{ $questions->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-lg-3 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="py-3">
                    @include('partials.pray')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>
@endpush

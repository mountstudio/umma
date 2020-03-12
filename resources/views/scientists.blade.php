@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-center">Ученые</h2>
                <hr style="background-color: black;color: black;">
                <h4 class="text-center">Задайте свой вопрос</h4>
                <p>Уважаемые посетители сайта, здесь вы можете задать свой вопрос имаму. На вопросы отвечает Кадыр
                    Маликов.
                    Перед заполнением формы убедитесь, что данный вопрос еще не публиковался на сайте. Для этого
                    воспользуйтесь формой поиска вопросов справа. Для вашего удобства все вопросы помечены специальными
                    тегами. Благодаря тегам вы сможете быстро отыскать вопросы на интересующую вас тему.</p>
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Ваше имя</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Имя">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Скрыть имя</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ваше сообщение</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button class="button button--nina button--text-thick button--text-upper button--size-s"
                            data-text="Отправить">
                        <span>О</span><span>т</span><span>п</span><span>р</span><span>а</span><span>в</span><span>и</span><span>т</span><span>ь</span>
                    </button>
                </form>
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
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>
@endpush

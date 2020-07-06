@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container bg-form card-body-admin py-4">
        <div class="row" id="show_articles">
            <div class="col-2">id</div>
            <div class="col-10">{{ $article->id }}</div>
            <div class="col-2">Заголовок:</div>
            <div class="col-10">{{ $article->name }}</div>
            <div class="col-2">Описание:</div>
            <div class="col-10">{{ $article->desc }}</div>
            @if(!is_null($article->category))
                <div class="col-2"> Категория:</div>
                <div class="col-10">
                    {{ $article->category->name }}
                </div>
            @endif
            <div class="col-2"> Ключевые слова:</div>
            <div class="col-10">{{ $article->keywords }}</div>
            <div class="col-2"> Просмотры:</div>
            <div class="col-10">{{ $article->impressions }}</div>

            @if(!is_null($article->authors))
                <div class="col-2">Авторы:</div>
                <div class="col-10">{{ $article->authors->implode('full_name', ',') }}</div>
            @endif
            @if(!is_null($article->photographers))
                <div class="col-2">Фотографы:</div>
                <div class="col-10">{{ $article->photographers->implode('full_name', ',') }}</div>
            @endif
            @if(!is_null($article->tags))
                <div class="col-2">Теги:</div>
                <div class="col-10">{{ $article->tags->implode('name', ', ') }}</div>
            @endif
            @if(!is_null($article->type))
                <div class="col-2">Тип:</div>
                <div class="col-10">{{ $article->type }}</div>
            @endif
                <div class="col-2"> Комментарии:</div>
                <div class="col-10">{{ !is_null($article->comments) ? $article->comments->count():0 }}</div>
            @if(!is_null($article->logo))
                <div class="col-2"> Превью:</div>
                <div class="col-10"><img src="{{ asset('storage/medium/' .$article->logo) }}"></div>
            @endif
            @if(!is_null($article->banner))
                <div class="col-2"> Главное фото:</div>
                <div class="col-10"><img src="{{ asset('storage/medium/' .$article->banner) }}"></div>
            @endif
            @if(!is_null($article->og_image))
                <div class="col-2"> Фото для open graph:</div>
                <div class="col-10"><img src="{{ asset('storage/medium/' .$article->og_image) }}"></div>
            @endif
            <div class="col-2"> контент:</div>
            <div class="col-10">{!! $article->content  !!}</div>
            <div class="col-2"> Активен:</div>
            <div class="col-10">
                @if($article->is_active)
                    <label>Да</label>
                @else
                    <label>Нет</label>
                @endif
            </div>
            <div class="col-2"> На главной странице:</div>
            <div class="col-10">
                @if($article->view_main)
                    <label>Да</label>
                @else
                    <label>Нет</label>
                @endif
            </div>
            <div class="col-2">Дата создания:</div>
            <div class="col-10">{{ $article->created_at }}</div>
            <div class="col-2">Дата обновления:</div>
            <div class="col-10">{{ $article->updated_at }}</div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        #show_articles .col-2, #show_articles .col-10 {
            padding-top: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #dcdcdd;
        }
        #show_articles .col-2 {
            border-right: 1px solid #dcdcdd;
        }
    </style>
@endpush
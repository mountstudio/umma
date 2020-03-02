@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $article->id }}</p>
                    <label>Заголовок:</label>
                    <p>{{ $article->name }}</p>
                    <label>Категория:</label>
                    <p>{{ $article->category_id }}</p>
                    <label>Просмотры:</label>
                    <p>{{ $article->impressions }}</p>
                    <label>Комментарии:</label>
                    <p>{{ $article->comments->count() }}</p>
                    <label>Главное фото:</label>
                    <img src="{{ asset('storage/medium/' .$article->logo) }}">
                    @if($article->is_active)
                        <label>Активен: Да</label>
                    @else
                        <label>Активен: Нет</label>
                    @endif
                    <br>
                    @if($article->view_main)
                        <label>На главной странице: Да</label>
                    @else
                        <label>На главной странице: Нет</label>
                    @endif
                    <br>
                    <label>контент:</label>
                    {!! $article->content  !!}
                </div>
                <p>{{ $article->created_at }}</p>
                <p>{{ $article->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

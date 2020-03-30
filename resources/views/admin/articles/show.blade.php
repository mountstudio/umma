@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <td scope="row">{{ $article->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $article->name }}</td>
                        </tr>
                        @if($article->category->count())
                            <tr>
                                <th> Категория:</th>
                                <td scope="row">{{ $article->category->name }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th> Просмотры:</th>
                            <td scope="row">{{ $article->impressions }}</td>
                        </tr>
                        @if($article->authors->count())
                            <tr>
                                <th>Авторы:</th>
                                <td scope="row">{{ $article->authors->implode('full_name', ',') }}</td>
                            </tr>
                        @endif
                        @if($article->photographers->count())
                            <tr>
                                <th>Авторы:</th>
                                <td scope="row">{{ $article->photographers->implode('full_name', ',') }}</td>
                            </tr>
                        @endif
                        @if($article->tags->count())
                            <tr>
                                <th>Авторы:</th>
                                <td scope="row">{{ $article->tags->implode('name', ', ') }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th> Комментарии:</th>
                            <td scope="row">{{ $article->comments->count() }}</td>
                        </tr>
                        <tr>
                            <th> Главное фото:</th>
                            <td scope="row"><img src="{{ asset('storage/medium/' .$article->logo) }}"></td>
                        </tr>
                        <tr>
                            <th> контент:</th>
                            <td scope="row">{!! $article->content  !!}</td>
                        </tr>
                        <tr>
                            <th> Активен:</th>
                            <td scope="row">
                                @if($article->is_active)
                                    <label>Да</label>
                                @else
                                    <label>Нет</label>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th> На главной странице:</th>
                            <td scope="row">
                                @if($article->view_main)
                                    <label>Да</label>
                                @else
                                    <label>Нет</label>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $article->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $article->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

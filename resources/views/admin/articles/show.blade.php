@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container bg-form card-body-admin py-4">
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
                        <tr>
                            <th> Описание:</th>
                            <td scope="row">{{ $article->desc }}</td>
                        </tr>
                        @if(!is_null($article->category))
                            <tr>
                                <th> Категория:</th>
                                <td scope="row">{{ $article->category->name }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th> Ключевые слова:</th>
                            <td scope="row">{{ $article->keywords }}</td>
                        </tr>
                        <tr>
                            <th> Просмотры:</th>
                            <td scope="row">{{ $article->impressions }}</td>
                        </tr>
                        @if(!is_null($article->authors))
                            <tr>
                                <th>Авторы:</th>
                                <td scope="row">{{ $article->authors->implode('full_name', ',') }}</td>
                            </tr>
                        @endif
                        @if(!is_null($article->photographers))
                            <tr>
                                <th>Фотографы:</th>
                                <td scope="row">{{ $article->photographers->implode('full_name', ',') }}</td>
                            </tr>
                        @endif
                        @if(!is_null($article->tags))
                            <tr>
                                <th>Теги:</th>
                                <td scope="row">{{ $article->tags->implode('name', ', ') }}</td>
                            </tr>
                        @endif
                        @if(!is_null($article->type))
                            <tr>
                                <th>Тип:</th>
                                <td scope="row">{{ $article->type }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th> Комментарии:</th>
                            <td scope="row">{{ !is_null($article->comments) ? $article->comments->count():0 }}</td>
                        </tr>
                        @if($article->logo)
                            <tr>
                                <th> Превью:</th>
                                <td scope="row"><img src="{{ asset('storage/medium/' .$article->logo) }}"></td>
                            </tr>
                        @endif
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

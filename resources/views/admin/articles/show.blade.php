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
                        <tr>
                            <th> Категория:</th>
                            <td scope="row">{{ $article->category_id }}</td>
                        </tr>
                        <tr>
                            <th> Просмотры:</th>
                            <td scope="row">{{ $article->impressions }}</td>
                        </tr>
                        <tr>
                            <th> Комментарии:</th>
                            <td scope="row">{{ $article->comments->count() }}</td>
                        </tr>
                        <tr>
                            <th> Главное фото::</th>
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
{{--                    <label>id:</label>--}}
{{--                    <p>{{ $article->id }}</p>--}}
{{--                    <label>Заголовок:</label>--}}
{{--                    <p>{{ $article->name }}</p>--}}
{{--                    <label>Категория:</label>--}}
{{--                    <p>{{ $article->category_id }}</p>--}}
{{--                    <label>Просмотры:</label>--}}
{{--                    <p>{{ $article->impressions }}</p>--}}
{{--                    <label>Комментарии:</label>--}}
{{--                    <p>{{ $article->comments->count() }}</p>--}}
{{--                    <label>Главное фото:</label>--}}
{{--                    <img src="{{ asset('storage/medium/' .$article->logo) }}">--}}
{{--                    @if($article->is_active)--}}
{{--                        <label>Активен: Да</label>--}}
{{--                    @else--}}
{{--                        <label>Активен: Нет</label>--}}
{{--                    @endif--}}
{{--                    <br>--}}
{{--                    @if($article->view_main)--}}
{{--                        <label>На главной странице: Да</label>--}}
{{--                    @else--}}
{{--                        <label>На главной странице: Нет</label>--}}
{{--                    @endif--}}
{{--                    <br>--}}
{{--                    <label>контент:</label>--}}
{{--                    {!! $article->content  !!}--}}
{{--                </div>--}}

{{--                <p>{{ $article->created_at }}</p>--}}
{{--                <p>{{ $article->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

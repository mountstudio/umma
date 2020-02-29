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
                            <th>Категория</th>
                            <td>{{ $article->category_id }}</td>
                        </tr>
                        <tr>
                            <th>Главное фото:</th>
                            <td><img src="{{ asset('storage/medium/' .$article->logo) }}">

                        </tr>
                        <tr>
                            <th>Активен:</th>
                            <td> @if($article->is_active)
                                    Да
                                @else
                                    Нет
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>На главной странице:</th>
                            <td> @if($article->view_main)
                                     Да
                                @else
                                     Нет
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Контент:</th>
                            <td>{!! $article->content  !!}</td>
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
                </div>

{{--                <p>{{ $article->created_at }}</p>--}}
{{--                <p>{{ $article->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

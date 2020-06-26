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
                            <td scope="row">{{ $author->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $author->full_name }}</td>
                        </tr>
                        <tr>
                            <th> На главной странице:</th>
                            <td scope="row">@if($author->view_main)
                                    <label>Да</label>
                                @else
                                    <label>Нет</label>
                                @endif</td>
                        </tr>
                        <tr>
                            <th> Ссылка к видео:</th>
                            <td scope="row"><img src="{{ asset('storage/medium/' . $author->photo) }}"></td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $author->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $author->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                    {{--                    <label>id:</label>--}}
                    {{--                    <p>{{ $author->id }}</p>--}}
                    {{--                    <label>Заголовок:</label>--}}
                    {{--                    <p>{{ $author->full_name }}</p>--}}
                    {{--                    @if($author->view_main)--}}
                    {{--                        <label>На главной странице: Да</label>--}}
                    {{--                    @else--}}
                    {{--                        <label>На главной странице: Нет</label>--}}
                    {{--                    @endif--}}
                    {{--                    <br>--}}
                    {{--                    <label>Ссылка к видео:</label>--}}
                    {{--                </div>--}}
                    {{--                <img src="{{ asset('storage/medium/' . $author->photo) }}">--}}
                    {{--                <p>{{ $author->created_at }}</p>--}}
                    {{--                <p>{{ $author->updated_at }}</p>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

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
                            <td scope="row">{{ $author->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $author->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Картинка</th>
                            <td><img src="{{ asset('storage/medium/' . $author->photo) }}"></td>

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
{{--                    <label>Ссылка к видео:</label>--}}
                </div>
{{--                <img src="{{ asset('storage/medium/' . $author->photo) }}">--}}
{{--                <p>{{ $author->created_at }}</p>--}}
{{--                <p>{{ $author->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

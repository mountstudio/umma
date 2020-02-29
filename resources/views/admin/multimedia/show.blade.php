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
                            <td>{{ $multimedia->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $multimedia->title }}</td>
                        </tr>
                        <tr>
                            <th> Ссылка к видео:</th>
                            <td>{{ $multimedia->url_video }}</td>
                        </tr>
                        <tr>
                            <th> Картинка:</th>
                            <td><img src="{{ asset('storage/medium/' . $multimedia->url_photo) }}"></td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $multimedia->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $multimedia->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
{{--                    <label>id:</label>--}}
{{--                    <p>{{ $multimedia->id }}</p>--}}
{{--                    <label>Заголовок:</label>--}}
{{--                    <p>{{ $multimedia->title }}</p>--}}
{{--                    <label>Ссылка к видео:</label>--}}
{{--                    <p>{{ $multimedia->url_video }}</p>--}}
                </div>
{{--                <img src="{{ asset('storage/medium/' . $multimedia->url_photo) }}">--}}
{{--                <p>{{ $multimedia->created_at }}</p>--}}
{{--                <p>{{ $multimedia->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

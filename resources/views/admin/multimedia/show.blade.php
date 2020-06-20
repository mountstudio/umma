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
                            <td><a href="{{ $multimedia->url_video }}" target="_blank">{{ $multimedia->url_video }}</a></td>
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
                </div>
            </div>
        </div>
    </div>

@endsection

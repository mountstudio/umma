@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $multimedia->id }}</p>
                    <label>Заголовок:</label>
                    <p>{{ $multimedia->title }}</p>
                    <label>Ссылка к видео:</label>
                    <p>{{ $multimedia->url_video }}</p>
                </div>
                <img src="{{ asset('storage/medium/' . $multimedia->url_photo) }}">
                <p>{{ $multimedia->created_at }}</p>
                <p>{{ $multimedia->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

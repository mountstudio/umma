@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $photographer->id }}</p>
                    <label>Заголовок:</label>
                    <p>{{ $photographer->full_name }}</p>
                    <label>Ссылка к видео:</label>
                </div>
                <img src="{{ asset('storage/medium/' . $photographer->photo) }}">
                <p>{{ $photographer->created_at }}</p>
                <p>{{ $photographer->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

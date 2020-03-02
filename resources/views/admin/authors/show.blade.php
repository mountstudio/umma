@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $author->id }}</p>
                    <label>Заголовок:</label>
                    <p>{{ $author->full_name }}</p>
                    @if($author->view_main)
                        <label>На главной странице: Да</label>
                    @else
                        <label>На главной странице: Нет</label>
                    @endif
                    <br>
                    <label>Ссылка к видео:</label>
                </div>
                <img src="{{ asset('storage/medium/' . $author->photo) }}">
                <p>{{ $author->created_at }}</p>
                <p>{{ $author->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

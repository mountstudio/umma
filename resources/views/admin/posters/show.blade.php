@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $poster->id }}</p>
                    <label>Наименование:</label>
                    <p>{{ $poster->name }}</p>
                    <label>контент</label>
                    {!! $poster->content  !!}
                    <label>телефон</label>
                    <p>{{ $poster->phone }}</p>
                    <label>mail</label>
                    <p>{{ $poster->mail }}</p>
                    <label>Главное фото</label>
                </div>
                <img src="{{ asset('storage/medium/' . $poster->main_photo) }}">
                <p>{{ $poster->created_at }}</p>
                <p>{{ $poster->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

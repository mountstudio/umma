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
                            <td>{{ $poster->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Наименование:</th>
                            <td scope="row">{{ $poster->name }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $poster->content  !!}</td>
                        </tr>
                        <tr>
                            <th> Тип:</th>
                            <td scope="row">{{ $poster->type_id }}</td>
                        </tr>
                        <tr>
                            <th> Телефон:</th>
                            <td scope="row">{{ $poster->phone }}</td>
                        </tr>
                        <tr>
                            <th> mail:</th>
                            <td scope="row">{{ $poster->mail }}</td>
                        </tr>
                        <tr>
                            <th> Главное фото:</th>
                            <td scope="row"><img src="{{ asset('storage/medium/' . $poster->main_photo) }}"></td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $poster->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $poster->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
{{--                    <label>id:</label>--}}
{{--                    <p>{{ $poster->id }}</p>--}}
{{--                    <label>Наименование:</label>--}}
{{--                    <p>{{ $poster->name }}</p>--}}
{{--                    <label>контент</label>--}}
{{--                    {!! $poster->content  !!}--}}
{{--                    <label>тип:</label>--}}
{{--                    <p>{{ $poster->type_id }}</p>--}}
{{--                    <label>телефон</label>--}}
{{--                    <p>{{ $poster->phone }}</p>--}}
{{--                    <label>mail</label>--}}
{{--                    <p>{{ $poster->mail }}</p>--}}
{{--                    <label>Главное фото</label>--}}
                </div>
{{--                <img src="{{ asset('storage/medium/' . $poster->main_photo) }}">--}}
{{--                <p>{{ $poster->created_at }}</p>--}}
{{--                <p>{{ $poster->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

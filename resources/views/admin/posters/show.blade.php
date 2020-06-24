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
                            <td>{{ $poster->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Наименование:</th>
                            <td scope="row">{{ $poster->name }}</td>
                        </tr>
                        <tr>
                            <th> Язык:</th>
                            <td scope="row">{{ $poster->lang  }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $poster->content  !!}</td>
                        </tr>
                        @if($poster->type->count())
                            <tr>
                                <th> Тип:</th>
                                <td scope="row">{{ $poster->type->name }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th> Телефон:</th>
                            <td scope="row">{{ $poster->phone }}</td>
                        </tr>
                        <tr>
                            <th> mail:</th>
                            <td scope="row">{{ $poster->mail }}</td>
                        </tr>
                        <tr>
                            <th> Дата события:</th>
                            <td scope="row">{{ $poster->date_event }}</td>
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
                </div>
            </div>
        </div>
    </div>

@endsection

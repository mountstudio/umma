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
                            <td>{{ $project->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Наименование:</th>
                            <td scope="row">{{ $project->name }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $project->description  !!}</td>
                        </tr>
                        <tr>
                            <th> Главное фото:</th>
                            <td><img src="{{ asset('storage/medium/' . $project->image) }}"></td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $project->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $project->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('admin.dashboard')
@section('dashboard_content')
    <table class="table table-bordered bg-form card-body-admin py-4">
        <thead>
        <tr>
            <th scope="col">id</th>
            <td scope="row">{{ $hadith->id }}</td>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th> Заголовок:</th>
            <td scope="row">{{ $hadith->name }}</td>
        </tr>
        <tr>
            <th> Язык:</th>
            <td scope="row">{{ $hadith->lang }}</td>
        </tr>
        <tr>
            <th> Контент:</th>
            <td scope="row">{!! $hadith->content  !!}</td>
        </tr>
        <tr>
            <th>Дата создания:</th>
            <td>{{ $hadith->created_at }}</td>
        </tr>
        <tr>
            <th>Дата обновления:</th>
            <td>{{ $hadith->updated_at }}</td>
        </tr>
        </tbody>
    </table>
@endsection

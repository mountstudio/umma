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
                            <td>{{ $posterType->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Наименование:</th>
                            <td scope="row">{{ $posterType->name }}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $posterType->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $posterType->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

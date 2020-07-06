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
                            <td scope="row">{{ $category->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Наименование:</th>
                            <td scope="row">{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <th> Наименование на кыргызском:</th>
                            <td scope="row">{{ $category->name_kg }}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $category->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $category->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

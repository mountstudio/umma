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
                            <td scope="row">{{ $questionCategory->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $questionCategory->name }}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $questionCategory->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $questionCategory->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
{{--                    <h1>{{ $questionCategory->id }}</h1>--}}
{{--                    <h2>{{ $questionCategory->name }}</h2>--}}
                </div>
{{--                <p>{{ $questionCategory->created_at }}</p>--}}
{{--                <p>{{ $questionCategory->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

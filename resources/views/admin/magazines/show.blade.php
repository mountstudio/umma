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
                            <td>{{ $magazine->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $magazine->name }}</td>
                        </tr>
                        <tr>
                            <th> Статус журнала:</th>
                            <td scope="row">{{ $magazine->status }}</td>
                        </tr>
                        <tr>
                            <th> Картинка:</th>
                            <td><img src="{{ asset('storage/medium/' . $magazine->image) }}"></td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $magazine->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $magazine->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

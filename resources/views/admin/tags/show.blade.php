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
                            <td>{{ $tag->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $tag->name }}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $tag->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $tag->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
{{--                    <h1>{{ $tag->id }}</h1>--}}
{{--                    <h2>{{ $tag->name }}</h2>--}}
                </div>
{{--                <p>{{ $tag->created_at }}</p>--}}
{{--                <p>{{ $tag->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

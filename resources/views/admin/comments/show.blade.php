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
                            <td scope="row">{{ $comment->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> ФИО:</th>
                            <td scope="row">{{ $comment->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Контент:</th>
                            <td scope="row">{!! $comment->content  !!}</td>
                        </tr>
                        <tr>
                            <th>статья:</th>
                            <td scope="row">{{ $comment->article->name }}</td>
                        </tr>
                        <tr>
                            <th>Телефон:</th>
                            <td scope="row">{{ $comment->phone }}</td>
                        </tr>
                        <tr>
                            <th>Почта:</th>
                            <td scope="row">{{ $comment->mail }}</td>
                        </tr>
                        <tr>
                            <th>Зарегистрирован:</th>
                            <td scope="row">{{ $comment->user ? 'Да':'Нет' }}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $comment->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $comment->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

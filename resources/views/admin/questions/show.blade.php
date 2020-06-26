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
                            <td>{{ $question->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $question->name }}</td>
                        </tr>
                        <tr>
                            <th> Вопрос:</th>
                            <td scope="row">{!! $question->content  !!}</td>
                        </tr>
                        <tr>
                            <th> Ответ:</th>
                            <td scope="row">{!! $question->answer  !!}</td>
                        </tr>
                        <tr>
                            <th> Телефон:</th>
                            <td scope="row">{{ $question->phone }}</td>
                        </tr>
                        @if(!is_null($question->category))
                        <tr>
                            <th>категория:</th>
                            <td scope="row">{{ $question->category->name }}</td>
                        </tr>
                        @endif
                        <tr>
                            <th> ФИО:</th>
                            <td scope="row">{{ $question->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $question->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $question->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

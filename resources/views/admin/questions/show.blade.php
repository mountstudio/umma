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
                            <td>{{ $question->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $question->name }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $question->content  !!}</td>
                        </tr>
                        <tr>
                            <th> Телефон:</th>
                            <td scope="row">{{ $question->phone }}</td>
                        </tr>
                        <tr>
                            <th> Id категории:</th>
                            <td scope="row">{{ $question->category_id }}</td>
                        </tr>
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
{{--                    <label>id:</label>--}}
{{--                    <p>{{ $question->id }}</p>--}}
{{--                    <label>Наименование:</label>--}}
{{--                    <p>{{ $question->name }}</p>--}}
{{--                    <label>контент</label>--}}
{{--                    {!! $question->content  !!}--}}
{{--                    <label>телефон</label>--}}
{{--                    <p>{{ $question->phone }}</p>--}}
{{--                    <label>id категории</label>--}}
{{--                    <p>{{ $question->category_id }}</p>--}}
{{--                    <label>ФИО</label>--}}
{{--                    <p>{{ $question->full_name }}</p>--}}
                </div>
{{--                <p>{{ $question->created_at }}</p>--}}
{{--                <p>{{ $question->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

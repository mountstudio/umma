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
                            <th> Контент:</th>
                            <td scope="row">{{ $comment->content }}</td>
                        </tr>
                        <tr>
                            <th> ФИО:</th>
                            <td scope="row">{{ $comment->full_name }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $comment->content  !!}</td>
                        </tr>
                        <tr>
                            <th> Slug article:</th>
                            <td scope="row">{{ $comment->article->slug }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $comment->content  !!}</td>
                        </tr>
                        <tr>
                            <th> Телефон:</th>
                            <td scope="row">{{ $comment->phone }}</td>
                        </tr>
                        <tr>
                            <th> Почта:</th>
                            <td scope="row">{{ $comment->mail }}</td>
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
{{--                    <label>id:</label>--}}
{{--                    <p>{{ $comment->id }}</p>--}}
{{--                    <label>Контент:</label>--}}
{{--                    <p>{{ $comment->content }}</p>--}}
{{--                    <label>Полной имя:</label>--}}
{{--                    <p>{{ $comment->full_name }}</p>--}}
{{--                    <label>phone:</label>--}}
{{--                    <p>{{ $comment->phone }}</p>--}}
{{--                    <label>Почта:</label>--}}
{{--                    <p>{{ $comment->mail }}</p>--}}
{{--                    <label>slug article</label>--}}
{{--                    <p>{{ $comment->article->slug }}</p>--}}
{{--                    <label>контент:</label>--}}
{{--                    {!! $comment->content  !!}--}}
{{--                </div>--}}
{{--                <p>{{ $comment->created_at }}</p>--}}
{{--                <p>{{ $comment->updated_at }}</p>--}}
            </div>
        </div>
    </div>

@endsection

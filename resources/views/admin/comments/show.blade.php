@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $comment->id }}</p>
                    <label>Контент:</label>
                    <p>{{ $comment->content }}</p>
                    <label>Полной имя:</label>
                    <p>{{ $comment->full_name }}</p>
                    <label>phone:</label>
                    <p>{{ $comment->phone }}</p>
                    <label>Почта:</label>
                    <p>{{ $comment->mail }}</p>
                    <label>slug article</label>
                    <p>{{ $comment->article->slug }}</p>
                    <label>контент:</label>
                    {!! $article->content  !!}
                </div>
                <p>{{ $article->created_at }}</p>
                <p>{{ $article->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

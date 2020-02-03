@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('authors') }}">View all authors</a></li>
                <li><a href="{{route('authors') }}">Create author</a></li>
            </ul>
        </nav>
    </div>
    <form action="{{ route('authors.update',$author) }}" method="post">
        @method('PUT')
        <div class="form-group">
            <label for="fullName">Полной имя</label>
            <input type="text" class="form-control" name="new_name" value="{{ $author->full_name }}"/>
        </div>
        <div class="form-group">
            <label for="photo">Фотография</label>
            <img id="output" src="{{ asset('uploads/'.$author->photo) }}">
            <label for="imageInput">File input</label>
            <input data-preview="#preview" name="photo" type="file" id="imageInput" accept="image/*" onchange="loadFile(event)">
        </div>
        <div class="form-group">
            <input class="form-control" type="submit">
        </div>
    </form>
    <script>
        function loadFile(event) {
            let image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection

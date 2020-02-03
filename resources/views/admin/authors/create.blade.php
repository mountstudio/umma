@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('authors') }}">View all authors</a></li>
                <li><a href="{{ URL::to('authors') }}">Create author</a></li>
            </ul>
        </nav>
    </div>
    <div class="navbar navbar-inverse">
        <form enctype="multipart/form-data" method="post" action="{{ route('authors.store') }}">
            @csrf
            <div>
                <label for="fullName">Полное имя:</label>
                <input type="text" name="full_name" id="fullName">
            </div>
            <div class="form-group">
                <label for="imageInput">File input</label>
                <input data-preview="#preview" name="photo" type="file" id="imageInput" accept="image/*">
            </div>
            <div class="form-group">
                <input class="form-control" type="submit">
            </div>
        </form>
    </div>
@endsection

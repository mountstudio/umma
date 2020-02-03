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
    <label for="fullName">Полной имя</label>
    <p id="fullName">{{ $author->full_name }}</p>
    <label for="photo">Фотография</label>
    <img id="photo" src="{{ asset('uploads/'.$author->photo) }}">
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('articles') }}">View all articles</a></li>
                <li><a href="{{ URL::to('articles/create') }}">Create article</a></li>
            </ul>
        </nav>

        <h1>Create article</h1>

        <!-- if there are creation errors, they will show here -->
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div id="categories">
            <label for="parent_category">Выберите категорию:</label>
            <br>
            <select id="parent_category">
                <option value="0">Выберите категорию</option>
                @foreach($parent_categories as $parent_category)
                    <option value="{{ $parent_category->id }}">{{ $parent_category->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div id="authors">
            <label for="authors">Выберите автора:</label>
            <br>
            <select id="authors">
                <option value="0">Выберите категорию</option>
                @foreach($authors as $author)
                    <option>{{ $author->full_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection

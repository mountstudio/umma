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
    <div class="table-responsive-sm">
        <table class="table">
                <tr><td>Имя</td>
                    <td>Фотография</td>
                    <td>Действия</td>
                </tr>
            @foreach($authors as $author)
                <tr>
                    <td><a href="{{ route('authors.show', $author) }}">{{ $author->full_name }}</a></td>
                    <td><img src="{{ asset('uploads/'.$author->photo) }}" alt="{{ $author->photo }}"></td>
                    <td><a href="{{ route('authors.edit', $author)}}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('authors.destroy', $author)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>

    </div>
@endsection

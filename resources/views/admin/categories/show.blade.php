@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <h1>{{ $category->id }}</h1>
                    <h2>{{ $category->name }}</h2>
                </div>
                <p>{{ $category->created_at }}</p>
                <p>{{ $category->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

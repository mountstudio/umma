@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $project->id }}</p>
                    <label>Наименование:</label>
                    <p>{{ $project->name }}</p>
                    <label>контент</label>
                    {!! $project->description  !!}
                    <label>Главное фото</label>
                </div>
                <img src="{{ asset('storage/medium/' . $project->image) }}">
                <p>{{ $project->created_at }}</p>
                <p>{{ $project->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

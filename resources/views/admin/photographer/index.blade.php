@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.photographer.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="products-table">
        <thead>
        <tr>
            <th>name</th>
            <th>slug</th>
            <th>category_id</th>
            <th>logo</th>
            <th>is_active</th>
            <th>view_main</th>
            <th>content</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
    </table>
@endsection

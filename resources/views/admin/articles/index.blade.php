@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
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

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#products-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.articles.datatable.data') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'slug', name: 'slug' },
                    { data: 'category_id', name: 'category_id' },
                    { data: 'logo', name: 'logo' },
                    { data: 'is_active', name: 'is_active' },
                    { data: 'view_main', name: 'view_main' },
                    { data: 'content', name: 'content' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                ]
            });
        });
    </script>
@endpush

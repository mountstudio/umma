@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.'.$type.'s.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="articles-table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>category_id</th>
            <th>is_active</th>
            <th>view_main</th>
            <th>impressions</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
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
        $(function () {
            $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.'.$type.'.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'category_id', name: 'category_id'},
                    {data: 'is_active', name: 'is_active'},
                    {data: 'view_main', name: 'view_main'},
                    {data: 'impressions', name: 'impressions'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', searchable:false, orderable: false },
                ]
            });
        });
    </script>
@endpush

@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.posters.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="posters-table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>main_photo</th>
            <th>phone</th>
            <th>mail</th>
            <th>type_id</th>
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
            $('#posters-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.poster.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'main_photo', name: 'main_photo'},
                    {data: 'phone', name: 'phone'},
                    {data: 'mail', name: 'mail'},
                    {data: 'type_id', name: 'type_id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false},
                ]
            });
        });
    </script>
@endpush


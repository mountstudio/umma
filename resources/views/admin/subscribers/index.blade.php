@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.subscribers.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="subscribers-table">
        <thead>
        <tr>
            <th>id</th>
            <th>email</th>
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
            $('#subscribers-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.subscriber.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions',searchable: false, orderable: false },
                ]
            });
        });
    </script>
@endpush


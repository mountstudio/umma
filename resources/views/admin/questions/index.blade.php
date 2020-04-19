@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.questions.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="questions-table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>category</th>
            <th>full_name</th>
            <th>mail</th>
            <th>phone</th>
            <th>registered</th>
            <th>is_anonim</th>
            <th>is_solved</th>
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
        $(function() {
            $('#questions-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.question.datatable.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'category_id', name: 'category_id' },
                    { data: 'full_name', name: 'full_name' },
                    { data: 'mail', name: 'mail' },
                    { data: 'phone', name: 'phone' },
                    { data: 'user_id', name: 'user_id', className: "dt-body-center", searchable: false, orderable: false },
                    { data: 'is_anonim', name: 'is_anonim', className: "dt-body-center", searchable: false, orderable: false },
                    { data: 'is_solved', name: 'is_solved', className: "dt-body-center", searchable: false, orderable: false },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'actions', name: 'actions', searchable:false, orderable: false},
                ]
            });
        });
    </script>
@endpush


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
            <th>category_id</th>
            <th>phone</th>
            <th>full_name</th>
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
            $('#questions-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.question.datatable.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'category_id', name: 'category_id' },
                    { data: 'phone', name: 'phone' },
                    { data: 'full_name', name: 'full_name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                ]
            });
        });
    </script>
@endpush


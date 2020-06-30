@extends('admin.dashboard')
@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row justify-content-end mb-4">
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered" id="text-table">
                    <thead>
                    <tr>
                        <th>Описание</th>
                        <th>Текст</th>
                        <th>Текст на кыргызском</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $('#text-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.siteText.datatable.data') !!}',
                columns: [
                    {data: 'desc', name: 'desc'},
                    {data: 'text', name: 'text'},
                    {data: 'kg_text', name: 'kg_text'},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false},
                ]
            });
        });
    </script>
@endpush


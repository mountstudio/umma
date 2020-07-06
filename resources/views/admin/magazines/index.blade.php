@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row justify-content-end mb-4">
            <div class="col-auto">
                <a href="{{ route('admin.magazines.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered" id="magazines-table">
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Изображение</th>
                        <th>Статус</th>
                        <th>Статус на кыргызском</th>
                        <th>actions</th>
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
            $('#magazines-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.magazine.datatable.data') !!}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'image', name: 'image', searchable: false, orderable: false},
                    {data: 'status', name: 'status'},
                    {data: 'kg_status', name: 'kg_status'},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false},
                ]
            });
        });
    </script>
@endpush

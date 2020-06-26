@extends('admin.dashboard')
@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row justify-content-end mb-4">
            <div class="col-auto">
                <a href="{{ route('admin.posters.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered" id="posters-table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Наименование</th>
                        <th>Главное фото</th>
                        <th>Телефон</th>
                        <th>Язык</th>
                        <th>Почта</th>
                        <th>Дата события</th>
                        <th>Тип</th>
                        <th>created_at</th>
                        <th>updated_at</th>
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
            $('#posters-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.poster.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'main_photo', name: 'main_photo'},
                    {data: 'phone', name: 'phone'},
                    {data: 'lang', name: 'lang'},
                    {data: 'mail', name: 'mail'},
                    {data: 'date_event', name: 'date_event'},
                    {data: 'type_id', name: 'type_id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false},
                ]
            });
        });
    </script>
@endpush


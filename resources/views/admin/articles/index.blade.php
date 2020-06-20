@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row justify-content-end mb-4">
            <div class="col-auto">
                <a href="{{ route('admin.'.$type.'s.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-striped  table-hover" id="articles-table" >
                    <thead>
                    <tr>
                        <th scope="col" style="display: none!important;">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Активен_ли?</th>
                        <th scope="col">view_main</th>
                        <th scope="col">impressions</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">actions</th>
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
            $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.'.$type.'.datatable.data') !!}',
                columns: [
                    // {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'desc', name: 'description'},
                    {data: 'category_id', name: 'category_id'},
                    {data: 'is_active', name: 'is_active', className: "dt-body-center", searchable: false, orderable: false },
                    {data: 'view_main', name: 'view_main', className: "dt-body-center", searchable: false, orderable: false },
                    {data: 'impressions', name: 'impressions'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', searchable:false, orderable: false },
                ]
            });
        });
    </script>
@endpush

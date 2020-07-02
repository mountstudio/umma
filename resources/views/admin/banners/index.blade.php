@extends('admin.dashboard')
@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row justify-content-end mb-4">
            <div class="col-auto">
                <a href="{{ route('admin.banners.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered" id="banner-table">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Баннер</th>
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
            $('#banner-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.banner.datatable.data') !!}',
                columns: [
                    {data: 'number', name: 'number'},
                    {data: 'image', name: 'image', searchable: false, orderable: false},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false},
                ]
            });
        });
    </script>
@endpush


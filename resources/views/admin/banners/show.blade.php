@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container bg-form card-body-admin py-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <td>{{ $banner->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Номер:</th>
                            <td scope="row">{{ $banner->number }}</td>
                        </tr>
                        <tr>
                            <th> Изображение:</th>
                            <td scope="row"><img src="{{ asset('storage/medium/' . $banner->image) }}"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

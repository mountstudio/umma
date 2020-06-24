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
                            <td scope="row">{{ $hadith->id }}</td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> Заголовок:</th>
                            <td scope="row">{{ $hadith->name }}</td>
                        </tr>
                        <tr>
                            <th> Язык:</th>
                            <td scope="row">{{ $hadith->lang }}</td>
                        </tr>
                        <tr>
                            <th> Контент:</th>
                            <td scope="row">{!! $hadith->content  !!}</td>
                        </tr>
                        <tr>
                            <th>Дата создания:</th>
                            <td>{{ $hadith->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Дата обновления:</th>
                            <td>{{ $hadith->updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
{{--                    <label>id:</label>--}}
{{--                    <p>{{ $hadith->id }}</p>--}}
{{--                    <label>Наименование:</label>--}}
{{--                    <p>{{ $hadith->name }}</p>--}}
{{--                    <label>контент</label>--}}
{{--                    {!! $hadith->content  !!}--}}
{{--                    <div>--}}
{{--                        <p>{{ $hadith->created_at }}</p>--}}
{{--                        <p>{{ $hadith->updated_at }}</p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

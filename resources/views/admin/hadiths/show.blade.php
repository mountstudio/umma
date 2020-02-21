@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $hadith->id }}</p>
                    <label>Наименование:</label>
                    <p>{{ $hadith->name }}</p>
                    <label>контент</label>
                    {!! $hadith->content  !!}
                    <div>
                        <p>{{ $hadith->created_at }}</p>
                        <p>{{ $hadith->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

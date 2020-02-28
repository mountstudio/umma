@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <label>id:</label>
                    <p>{{ $question->id }}</p>
                    <label>Наименование:</label>
                    <p>{{ $question->name }}</p>
                    <label>контент</label>
                    {!! $question->content  !!}
                    <label>телефон</label>
                    <p>{{ $question->phone }}</p>
                    <label>id категории</label>
                    <p>{{ $question->category_id }}</p>
                    <label>ФИО</label>
                    <p>{{ $question->full_name }}</p>
                </div>
                <p>{{ $question->created_at }}</p>
                <p>{{ $question->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection

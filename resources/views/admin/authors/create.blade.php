@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10 bg-form card-body-admin py-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="{{ route('admin.authors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <p class="font-weight-bold h2">Добавление Автора</p>
                </div>
                <div class="form-group">
                    <label for="full_name_field">ФИО автора<span class="text-danger">*</span></label>
                    <input id="full_name_field" type="text" class="form-control"
                           name="full_name" value="{{ old('full_name') }}" required>
                </div>
                <div class="form-group">
                    <label for="photo_input">Фотография</label>
                    <input id="photo_input" type="file" class="form-control" name="photo" accept="image/jpeg, image/png" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="view_main" class="form-check-input" id="viewMain_check" {{ old('view_main') ? 'checked':'' }}>
                    <label class="form-check-label" for="viewMain_check">На главный экран</label>
                </div>
                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush


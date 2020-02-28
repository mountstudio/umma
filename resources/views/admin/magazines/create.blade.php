@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="{{ route('admin.magazines.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name_field">Наименование<span class="text-danger">*</span></label>
                    <input id="name_field" type="text" class="form-control"
                           placeholder="Наименование" name="name" required>
                </div>
                <div class="form-group">
                    <label for="image_input">Картинка</label>
                    <input id="image_input" type="file" class="form-control" name="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="pdf_input">pdf</label>
                    <input id="pdf_input" type="file" class="form-control" name="pdf" accept="application/pdf" required>
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


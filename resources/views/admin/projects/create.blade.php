@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление проекта</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Наименование<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="content_area">Описание:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control richTextBox is-invalid"
                                  name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="main_photo_input">Главное фото:<span class="text-danger">*</span></label>
                        <input id="main_photo_input" type="file" class="form-control" name="image" accept="image/*"
                               required>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tinyMCE.js') }}"></script>
@endpush


@extends('admin.dashboard')
@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.siteTexts.update', $siteText) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование тега</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Описание<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" value="{{ $siteText->desc }}"
                               name="desc"
                               required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="ru-textarea">Контент:<span class="text-danger">*</span></label>
                        <textarea id="ru-textarea" class="form-control richTextBox is-invalid"
                                  name="text">{{ old('text', $siteText->text) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kg-textarea">Текст на кыргызском<span class="text-danger">*</span></label>
                        <textarea id="kg-textarea" class="form-control" name="kg_text"
                                  required>{{ $siteText->kg_text }}</textarea>
                    </div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#kg-textarea'
        });
        tinymce.init({
            selector: '#ru-textarea'
        });
    </script>
@endpush
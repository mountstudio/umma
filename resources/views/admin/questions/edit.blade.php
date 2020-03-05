@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="{{ route('admin.questions.update', $question) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name_field">Наименование<span class="text-danger">*</span></label>
                    <input id="name_field" value="{{ $question->name }}" type="text" class="form-control" name="name"
                           placeholder="" required>
                </div>
                <div id="categories">
                    <label for="categories">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="categories" name="category_id">
                        @foreach($questionCategories as $questionCategory)
                            <option value="{{ $questionCategory->id }}" {{ $question->questionCategory->id === $questionCategory->id ? 'selected' : '' }}>{{ $questionCategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <label for="content_area">Вопрос:<span class="text-danger">*</span></label>
                <div id="editorjs" class="border"></div>
                <div class="form-group pt-2">
                    <label for="content_area">Вопрос:<span class="text-danger">*</span></label>
                    <textarea id="content_area" class="form-control richTextBox is-invalid"
                              name="content">{{ $question->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="phone_field">Телефон:<span class="text-danger">*</span></label>
                    <input value="{{ $question->phone }}" type="text" class="form-control" name="phone" id="phone_field" required>
                </div>
                <div class="form-group">
                    <label for="name_field">Полное имя:<span class="text-danger">*</span></label>
                    <input value="{{ $question->full_name }}" type="text" class="form-control" name="full_name" id="name_field" required>
                </div>
                <button type="submit" title="{{ __('Изменить') }}" class="btn n btn-success">{{ __('Изменить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/editor-conf.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#content_area'
        });
    </script>
@endpush


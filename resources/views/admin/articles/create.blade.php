@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.'.$type.'s.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <label>{{  $type }}</label>
                <div class="form-group">
                    <label for="title_input">Заголовок<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title_input" name="name" required>
                </div>
                <div id="categories">
                    <label for="category">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="category" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="add_authors">авторы:</label>
                    <select id="add_authors" class="js-example-basic-multiple" name="authors[]" multiple="multiple" required>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="add_photographers">фотографы:</label>
                    <select id="add_photographers" class="js-example-basic-multiple" name="photographers[]"
                            multiple="multiple">
                        @foreach($photographers as $photographer)
                            <option value="{{ $photographer->id }}">{{ $photographer->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <label for="content_area">Контент:<span class="text-danger">*</span></label>
                <div id="editorjs" class="border"></div>
                <div class="form-group pt-2">
                    <label for="Content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="Content_area" class="form-control richTextBox is-invalid"
                              name="content"></textarea>
                </div>
                <div class="form-group">
                    <label for="add_tegs">теги:</label>
                    <select id="add_tegs" class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="main_photo">Выберите картинку:</label>
                    <input type="file" class="form-control" id="main_photo" name="logo" accept="image/*" required>
                </div>
                <div class="form-group">
                    <input value="{{ $type }}" type="hidden" id="type" name="type" >
                </div>
                <div class="form-check">
                    <input type="checkbox" name="is_active" class="form-check-input" id="isActive_check">
                    <label class="form-check-label" for="isActive_check">Активен</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="view_main" class="form-check-input" id="viewMain_check">
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
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/editor-conf.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#Content_area'
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();

        });
    </script>

@endpush


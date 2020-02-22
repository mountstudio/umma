@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.'.$type.'s.store') }}" method="POST">
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
                        <option value="0">Выберите категорию</option>
                        @foreach($categories as $category)
                            <option>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="add_authors">авторы:</label>
                    <select id="add_authors" class="js-example-basic-multiple" name="authors[]" multiple="multiple" required>
                        @foreach($authors as $author)
                            <option>{{ $author->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="add_photographers">фотографы:</label>
                    <select id="add_photographers" class="js-example-basic-multiple" name="photographers[]"
                            multiple="multiple">
                        @foreach($photographers as $photographer)
                            <option>{{ $photographer->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pt-2">
                    <label for="Content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="Content_area" class="form-control richTextBox is-invalid"
                              name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="add_tegs">теги:</label>
                    <select id="add_tegs" class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="main_photo">Выберите картинку:</label>
                    <input type="file" class="form-control" id="main_photo" name="logo" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="type">Выберите картинку:</label>
                    <input value="{{ $type }}" type="hidden" id="type" name="type" >
                </div>
                <button type="submit" title="{{ __('Добавить') }}"
                        class="btn n btn-success">{{ __('Добавить') }}</button>
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


@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Заголовок<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                           placeholder="" required>
                </div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div id="categories">
                    <label for="parent_category">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="parent_category">
                        <option value="0">Выберите категорию</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="add_authors">Добавить теги:</label>
                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                        @foreach($authors as $author)
                        <option>{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="add_photographers">Добавить теги:</label>
                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                        @foreach($photographers as $photographer)
                            <option>{{ $photographer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pt-2">
                    <label for="richtextDescription">Описание:<span class="text-danger">*</span></label>
                    <textarea id="mytextarea" class="form-control richTextBox is-invalid"
                              name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="add_tegs">Добавить теги:</label>
                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Выберите картинку:</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/select_categories.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endpush


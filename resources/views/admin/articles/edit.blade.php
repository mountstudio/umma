@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10 card-body-admin py-4">
            <form action="{{ route('admin.'.$article->type.'s.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
{{--                <label>{{  $article->type }}</label>--}}
                <div class="row justify-content-center">
                    <p class="font-weight-bold h2">Редактирование Статьи</p>
                </div>
                <div class="form-group">
                    <label for="title_input">Заголовок<span class="text-danger">*</span></label>
                    <input value="{{ $article->name }}" type="text" class="form-control" id="title_input" name="name"
                           required>
                </div>
                <div class="form-group">
                    <label for="title_input">Описание<span class="text-danger">*</span></label>
                    <input value="{{ $article->desc }}" type="text" class="form-control" id="title_input" name="desc" required>
                </div>
                <div class="form-group">
                    <label for="category">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="category" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id === $article->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="add_authors">авторы:</label>
                    <select id="add_authors" class="js-example-basic-multiple" name="authors[]" multiple="multiple"
                            required>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" {{  $article->authors->find($author->id) ? 'selected' : '' }}>{{ $author->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="add_photographers">фотографы:</label>
                    <select id="add_photographers" class="js-example-basic-multiple" name="photographers[]"
                            multiple="multiple">
                        @foreach($photographers as $photographer)
                            <option value="{{ $photographer->id }}" {{ $article->photographers->find($photographer->id) ? 'selected' : '' }}>{{ $photographer->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pt-2">
                    <label for="content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="content_area" class="form-control richTextBox is-invalid"
                              name="content">{{ $article->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="add_tegs">теги:</label>
                    <select id="add_tegs" class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}" {{ $article->tags->find($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input value="{{ $article->type }}" type="hidden" id="type" name="type">
                </div>
                <div class="form-check">
                    <input {{ $article->is_active ? 'checked': '' }} type="checkbox" name="is_active"
                           class="form-check-input" id="isActive_check">
                    <label class="form-check-label" for="isActive_check">Активен</label>
                </div>
                <div class="form-check">
                    <input {{ $article->view_main ? 'checked': '' }} type="checkbox" name="view_main"
                           class="form-check-input" id="viewMain_check">
                    <label class="form-check-label" for="viewMain_check">На главный экран</label>
                </div>
                <div class="form-group">
                    <label for="photo_input">Выберите фото:</label>
                    <input id="photo_input" class="form-control" onchange="readURL(this);" type="file"
                           name="logo" accept="image/jpeg, image/png">
                    <br>
                    <img id="logo" src="{{ asset('storage/medium/' . $article->logo) }}" width="750"/>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/tinyMCE.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2({ width: '100%' });

        });
    </script>
    <script language="javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                $('#logo').width = 750;
            }
        }
    </script>
@endpush


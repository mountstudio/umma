@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row ">
        <div class="col-12 col-sm-10 col-lg-11 col-md-10 bg-form card-body-admin py-4">
            <form action="{{ route('admin.'.$type.'s.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="row justify-content-center">
                    <p class="font-weight-bold h2">Добавление Статьи</p>
                </div>
                <div class="form-group">
                    <label for="title_input">Заголовок<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title_input" name="name" value="{{old('name')}}"
                           required>
                </div>
                <div class="form-group">
                    <label for="desc_input">Описание<span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="desc_input" name="desc"
                              required>{{old('desc')}}</textarea>
                </div>
                <div id="categories">
                    <label for="category">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="category" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected':'' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="add_authors">Авторы:</label>
                    <select id="add_authors" class="js-example-basic-multiple" name="authors[]" multiple="multiple"
                            required>
                        @foreach($authors as $author)
                            @if(is_array(old('authors')))
                                <option value="{{ $author->id }}"{{ in_array($author->id, old('authors'))?'selected':'' }}>{{ $author->full_name }}</option>
                            @else
                                <option value="{{ $author->id }}">{{ $author->full_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="add_photographers">Фотографы:</label>
                    <select id="add_photographers" class="js-example-basic-multiple" name="photographers[]"
                            multiple="multiple">
                        @foreach($photographers as $photographer)
                            @if(is_array(old('photographers')))
                                <option value="{{ $photographer->id }}"{{ in_array($photographer->id, old('photographers'))?'selected':'' }}>{{ $photographer->full_name }}</option>
                            @else
                                <option value="{{ $photographer->id }}">{{ $photographer->full_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group pt-2">
                    <label for="content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="content_area" class="form-control richTextBox is-invalid"
                              name="content">{{ old('content') }}</textarea>
                </div>
                <div>
                    <label for="lang">Выберите язык:<span class="text-danger">*</span></label>
                    <br>
                    <select id="lang" name="lang">
                        <option value="ru" {{ old('lang')== 'ru' ? 'selected':'' }}>ru</option>
                        <option value="kg" {{ old('lang')== 'kg' ? 'selected':'' }}>kg</option>
                    </select>
                </div>
                <div>
                    <label for="keywords-area">Напишите ключевые слов(через запятую):</label>
                    <textarea class="form-control"
                              name="keywords" id="keywords-area">{{old('keywords')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="add_tags">Теги:</label>
                    <select id="add_tags" class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            @if(is_array(old('tags')))
                                <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags'))?'selected':'' }}>{{ $tag->name }}</option>
                            @else
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="is_active" class="form-check-input"
                           id="isActive_check" {{ old('is_active') ? 'checked':'' }}>
                    <label class="form-check-label" for="isActive_check">Активен</label>
                </div>

                <div class="form-check pb-2">
                    <input type="checkbox" name="view_main" class="form-check-input"
                           id="viewMain_check" {{ old('view_main') ? 'checked':'' }}>
                    <label class="form-check-label" for="viewMain_check">На главный экран</label>
                </div>
                <div class="form-group">
                    <label for="main_photo">Выберите изображение для превью:<span class="text-danger">*</span></label>
                    <input type="file" onchange="readURL(this);" class="form-control" id="main-photo" name="logo"
                           accept="image/*" value="{{old('logo')}}" required>
                    <img id="logo" src="" class="d-none" width="100%"/>
                </div>
                <div class="form-group">
                    <label for="banner-photo">Выберите баннер изображение:</label>
                    <input type="file" onchange="readBannerURL(this);" class="form-control" id="banner-photo"
                           name="banner" accept="image/*" value="{{old('banner')}}">
                    <img id="banner" src="" class="d-none" width="100%"/>
                </div>
                <div class="form-group">
                    <label for="og-photo">Выберите open graph изображение:</label>
                    <input type="file" onchange="readOg_imageURL(this);" class="form-control" id="og-photo"
                           name="og_image" accept="image/*" value="{{old('og_image')}}">
                    <img id="og_image" src="" class="d-none" width="100%"/>
                </div>
                <div class="form-group">
                    <input value="{{ $type }}" type="hidden" id="type" name="type">
                </div>
                <button type="submit" title="{{ __('Добавить') }}"
                        class="btn n btn-success ">{{ __('Добавить') }}</button>
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
            $('.js-example-basic-multiple').select2({width: '100%'});
        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                let image = $('#logo');
                reader.onload = function (e) {
                    image.attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                image = image.removeClass('d-none');
                image.width = '100%';
            }
        }
    </script>
    <script>
        function readBannerURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                let image = $('#banner');
                reader.onload = function (e) {
                    image.attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                image = image.removeClass('d-none');
                image.width = '100%';
            }
        }
    </script>
    <script>
        function readOg_imageURL(input) {
            console.log('og_image');
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                let image = $('#og_image');
                reader.onload = function (e) {
                    image.attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                image.removeClass('d-none');
                image.width = '100%';
            }
        }
    </script>
@endpush


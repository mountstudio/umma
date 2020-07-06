@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10 card-body-admin py-4">
            <form action="{{ route('admin.'.$article->type.'s.update', $article) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="row justify-content-center">
                    <p class="font-weight-bold h2">Редактирование Статьи</p>
                </div>
                <div class="form-group">
                    <label for="title_input">Заголовок<span class="text-danger">*</span></label>
                    <input value="{{ old('name', $article->name) }}" type="text" class="form-control" id="title_input"
                           name="name"
                           required>
                </div>
                <div class="form-group">
                    <label for="desc_input">Описание<span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="desc_input" name="desc"
                              required>{{ old('desc',$article->desc) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="category" name="category_id">
                        @foreach($categories as $category)
                            @if(old('category_id'))
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}" {{ $category->id == $article->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="add_authors">авторы:</label>
                    <select id="add_authors" class="js-example-basic-multiple" name="authors[]" multiple="multiple"
                            required>
                        @foreach($authors as $author)
                            @if(is_array(old('authors')))
                                <option value="{{ $author->id }}" {{  in_array($author->id, old('authors'))?'selected':'' }}>{{ $author->full_name }}</option>
                            @else
                                <option value="{{ $author->id }}" {{  $article->authors->find($author->id) ? 'selected' : '' }}>{{ $author->full_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="add_photographers">фотографы:</label>
                    <select id="add_photographers" class="js-example-basic-multiple" name="photographers[]"
                            multiple="multiple">
                        @foreach($photographers as $photographer)
                            @if(is_array(old('photographers')))
                                <option value="{{ $photographer->id }}" {{  in_array($photographer->id, old('photographers'))?'selected':'' }}>{{ $photographer->full_name }}</option>
                            @else
                                <option value="{{ $photographer->id }}" {{  $article->photographers->find($photographer->id) ? 'selected' : '' }}>{{ $photographer->full_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group pt-2">
                    <label for="content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="content_area" class="form-control richTextBox is-invalid"
                              name="content">{{ old('content', $article->content) }}</textarea>
                </div>
                <div>
                    <label for="lang">Выберите язык:<span class="text-danger">*</span></label>
                    <br>
                    <select id="lang" name="lang">
                        <option value="ru"{{ old('lang', $article->lang) =='ru'? 'selected': ''}}>ru</option>
                        <option value="kg"{{ old('lang', $article->lang) =='kg'? 'selected': ''}}>kg</option>
                    </select>
                </div>
                <div>
                    <label for="keywords-area">Напишите ключевые слов(через запятую):</label>
                    <textarea class="form-control"
                              name="keywords" id="keywords-area">{{ old('keywords', $article->keywords) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="add_tags">теги:</label>
                    <select id="add_tags" class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            @if(is_array(old('tags')))
                                <option value="{{ $tag->id }}" {{  in_array($tag->id, old('tags'))?'selected':'' }}>{{ $tag->name }}</option>
                            @else
                                <option value="{{ $tag->id }}" {{  $article->tags->find($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input value="{{ $article->type }}" type="hidden" id="type" name="type">
                </div>
                <div class="form-check">
                    <input {{ old('is_active', $article->is_active)  ? 'checked': '' }} type="checkbox" name="is_active"
                           class="form-check-input" id="isActive_check">
                    <label class="form-check-label" for="isActive_check">Активен</label>
                </div>
                {{ old('view_main')}}
                <div class="form-check">
                    <input {{ old('view_main', $article->view_main) ? 'checked': '' }} type="checkbox" name="view_main"
                           class="form-check-input" id="viewMain_check">
                    <label class="form-check-label" for="viewMain_check">На главный экран</label>
                </div>
                <div class="form-group">
                    <label for="photo_input">Выберите фото:</label>
                    <input id="photo_input" class="form-control" onchange="readURL(this);" type="file"
                           name="logo" accept="image/jpeg, image/png">
                    <br>
                    @if(!is_null($article->logo))
                        <img id="logo" src="{{ asset('storage/medium/' . $article->logo) }}" width="100%"/>
                    @endif
                </div>
                <div class="form-group">
                    <label for="banner-photo">Выберите баннер изображение:</label>
                    <input id="banner-photo" class="form-control" onchange="readBannerURL(this);" type="file"
                           name="banner" accept="image/jpeg, image/png">
                    @if(!is_null($article->banner))
                        <img id="banner"
                             src="{{ asset('storage/medium/' . $article->banner) }}"/>
                    @else
                        <img id="banner" class="d-none"
                             src=""/>
                    @endif
                </div>
                <div class="form-group">
                    <label for="og-photo">Выберите open graph изображение:</label>
                    <input id="og-photo" class="form-control" onchange="readOg_imageURL(this);" type="file"
                           name="og_image" accept="image/jpeg, image/png">
                    @if(!is_null($article->og_image))
                        <img id="og_image"
                             src="{{ asset('storage/medium/' . $article->og_image) }}"/>
                    @else
                        <img id="og_image" class="d-none"
                             src=""/>
                    @endif
                </div>
                <button type="submit" title="{{ __('Изменить') }}"
                        class="btn n btn-success">{{ __('Изменить') }}</button>
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
                reader.onload = function (e) {
                    $('#logo').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                $('#logo').width = '100%';
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


@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="form-group">
                    <label for="name_field">Наименование<span class="text-danger">*</span></label>
                    <input id="name_field" value="{{ $project->name }}" type="text" class="form-control" name="name">
                </div>
                <label for="content_area">Описание:<span class="text-danger">*</span></label>
                <div id="editorjs" class="border"></div>
                <div class="form-group pt-2">
                    <label for="content_area">Описание:<span class="text-danger">*</span></label>
                    <textarea id="content_area" class="form-control richTextBox is-invalid"
                              name="description">{{ $project->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image_input">Главное фото:<span class="text-danger">*</span></label>
                    <input id="image_input" type="file" onchange="readURL(this);" class="form-control" name="image" accept="image/*">
                    <img  id="photo" src="{{ asset('storage/medium/' . $project->image) }}">
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
    <script language="javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush


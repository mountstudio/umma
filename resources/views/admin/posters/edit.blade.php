@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.posters.update', $poster) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование афишы</p>
                    </div>
                    <div class="form-group">
                        <label for="name_filed">Наименование<span class="text-danger">*</span></label>
                        <input id="name_filed" value="{{ $poster->name }}" type="text" class="form-control" name="name"
                               placeholder="" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="content_area">Описание:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control richTextBox is-invalid"
                                  name="content">{{ $poster->content }}</textarea>
                    </div>
                    <div id="form-group">
                        <label for="type">Выберите тип:<span class="text-danger">*</span></label>
                        <br>
                        <select id="type" name="type_id">
                            @foreach($types as $type)
                                <option
                                    {{ $type->id == $poster->type_id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="date_event_field">Дата события:<span class="text-danger">*</span></label>
                        <br>
                        <input value="{{ date('Y-m-d\TH:i', strtotime($poster->date_event)) }}" type="datetime-local"
                               id="date_event_field" name="date_event" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_field">Телефон:<span class="text-danger">*</span></label>
                        <input id="phone_field" value="{{ $poster->phone }}" type="text" class="form-control"
                               name="phone"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="mail_field">mail:<span class="text-danger">*</span></label>
                        <input id="mail_field" value="{{ $poster->mail }}" type="text" class="form-control" name="mail"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="main_photo_input">Выберите фото:</label>
                        <input id="main_photo_input" class="form-control" onchange="readURL(this);" type="file"
                               name="main_photo" accept="image/jpeg, image/png">
                        <br>
                        <img id="photo" src="{{ asset('storage/medium/' . $poster->main_photo) }}" width="750"/>
                    </div>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
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
    <script language="javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                $('#photo').width = 750;
            }
        }
    </script>
@endpush


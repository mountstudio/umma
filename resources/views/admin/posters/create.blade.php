@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.posters.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление афишы</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="content_area">Описание:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control richTextBox is-invalid"
                                  name="content">{{ old('content') }}</textarea>
                    </div>
                    <div id="form-group">
                        <label for="type">Выберите тип:<span class="text-danger">*</span></label>
                        <br>
                        <select id="type" name="type_id">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}"{{ old('type_id')==$type->id ? 'selected':'' }}>{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="date_event_field">Дата события:<span class="text-danger">*</span></label>
                        <br>
                        <input type="datetime-local" id="date_event_field" name="date_event" value="{{ old('date_event') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_field">Телефон:<span class="text-danger">*</span></label>
                        <input id="phone_field" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="mail_field">mail:<span class="text-danger">*</span></label>
                        <input id="mail_field" type="text" class="form-control" name="mail" value="{{ old('mail') }}" required >
                    </div>
                    <div class="form-group">
                        <label for="main_photo_input">Главное фото:<span class="text-danger">*</span></label>
                        <input id="main_photo_input" type="file" class="form-control" name="main_photo"
                               accept="image/jpeg, image/png" required>
                    </div>
                    <div>
                        <label for="lang">Выберите язык:<span class="text-danger">*</span></label>
                        <br>
                        <select id="lang" name="lang">
                            <option value="ru"{{ old('lang')=='ru' ? 'selected':'' }}>ru</option>
                            <option value="kg"{{ old('lang')=='kg' ? 'selected':'' }}>kg</option>
                        </select>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tinyMCE.js') }}"></script>
@endpush


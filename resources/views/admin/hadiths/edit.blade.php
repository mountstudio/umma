@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.hadiths.update', $hadith) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование хадиса</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input id="name_field" value="{{ $hadith->name }}" type="text" class="form-control" name="name"
                               required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="content_area">Описание:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control richTextBox is-invalid"
                                  name="content">{{ $hadith->content }}</textarea>
                    </div>
                    <div>
                        <label for="lang">Выберите язык:<span class="text-danger">*</span></label>
                        <br>
                        <select id="lang" name="lang">
                            <option value="ru"{{ $hadith->lang=='ru'? 'selected': ''}}>ru</option>
                            <option value="kg"{{ $hadith->lang=='kg'? 'selected': ''}}>kg</option>
                        </select>
                    </div>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tinyMCE.js') }}"></script>
@endpush


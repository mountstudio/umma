@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.hadiths.store') }}" method="POST" enctype="multipart/form-data">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @csrf
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление хадиса</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" name="name"
                               placeholder="" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="content_area">Описание:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control richTextBox is-invalid"
                                  name="content"></textarea>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
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


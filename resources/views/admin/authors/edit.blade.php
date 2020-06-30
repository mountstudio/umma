@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10 bg-form card-body-admin py-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="{{ route('admin.authors.update', $author) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row justify-content-center">
                    <p class="font-weight-bold h2">Редактирование автора</p>
                </div>
                <div class="form-group">
                    <label for="full_name_field">ФИО автора<span class="text-danger">*</span></label>
                    <input id="full_name_field" value="{{ old('full_name', $author->full_name) }}" type="text" class="form-control"
                           name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="photo_input">Выберите фото:</label>
                    <input id="photo_input" class="form-control" onchange="readURL(this);" type="file"
                           name="photo" accept="image/jpeg, image/png">
                    <br>
                    <img id="photo" src="{{ asset('storage/medium/' . $author->photo) }}" width="750"/>
                </div>
                <div class="form-check">
                    <input {{ $author->view_main ? 'checked' : '' }} type="checkbox" name="view_main"
                           class="form-check-input" id="viewMain_check">
                    <label class="form-check-label" for="viewMain_check">На главный экран</label>
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
    <script language="javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

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

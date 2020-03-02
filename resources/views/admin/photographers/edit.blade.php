@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="{{ route('admin.photographers.update', $photographer) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="full_name_field">ФИО фотографа<span class="text-danger">*</span></label>
                    <input id="full_name_field" value="{{ $photographer->full_name }}" type="text" class="form-control"
                           name="full_name" accept="image/jpeg, image/png" required>
                </div>
                <div class="form-group">
                    <label for="photo_input">Выберите фото:</label>
                    <input id="photo_input" class="form-control" onchange="readURL(this);" type="file"
                           name="photo" accept="image/jpeg, image/png">
                    <img id="photo" src="{{ asset('storage/medium/' . $photographer->photo) }}"/>
                </div>
                <button type="submit" title="{{ __('Изменить') }}" class="btn n btn-success">{{ __('Изменить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
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
            }
        }
    </script>
@endpush
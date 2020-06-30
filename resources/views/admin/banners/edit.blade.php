@extends('admin.dashboard')
@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование баннера</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Номер<span class="text-danger">*</span></label>
                        <input id="name_field" type="number" class="form-control" value="{{ old('number', $banner->number)}}" name="number"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="photo_input">Выберите фото:</label>
                        <input id="photo_input" class="form-control" onchange="readURL(this);" type="file"
                               name="image" accept="image/jpeg, image/png">
                        <br>
                        <img id="photo" src="{{ asset('storage/medium/' . $banner->image) }}" width="750"/>
                    </div>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script language="javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                $('#photo').width = 750;
            }
        }
    </script>
@endpush

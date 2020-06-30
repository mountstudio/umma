@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                        <p class="font-weight-bold h2">Добавление баннер</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Номер:<span class="text-danger">*</span></label>
                        <input id="name_field" type="number" class="form-control" name="number" value="{{ old('number') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="photo_input">Баннер:<span class="text-danger">*</span></label>
                        <input id="photo_input" type="file" class="form-control" name="image"
                               accept="image/jpeg, image/png" required>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('admin.multimedia.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление видео</p>
                    </div>
                    <div class="form-group">
                        <label for="title_field">Название мультимедии</label>
                        <input type="text" class="form-control" id="title_field" name="title" value="{{ old('title') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="video_input">Ссылка на видео</label>
                        <input type="text" class="form-control" id="video_input" name="url_video" value="{{ old('url_video') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="photo_input">Картинка</label>
                        <input type="file" class="form-control" id="photo_input" name="url_photo"
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

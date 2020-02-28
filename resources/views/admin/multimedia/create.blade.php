@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.multimedia.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title_field">Название мультимедии</label>
                    <input type="text" class="form-control" id="title_field" name="title" required>
                </div>
                <div class="form-group">
                    <label for="video_input">Ссылка на видео</label>
                    <input type="text" class="form-control" id="video_input" name="url_video" required>
                </div>
                <div class="form-group">
                    <label for="photo_input">Картинка</label>
                    <input type="file" class="form-control" id="photo_input" name="url_photo" accept="image/jpeg, image/png" required>
                </div>

                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

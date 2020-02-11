@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.multimedia.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Название мультимедии</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="url_video">Ссылка на видео</label>
                    <input type="text" class="form-control" id="url_video" name="url_video" required>
                </div>
                <div class="form-group">
                    <label for="url_photo">Картинка</label>
                    <input type="file" class="form-control" id="url_photo" name="url_photo" required>
                </div>

                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

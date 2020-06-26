@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.multimedia.update', $multimedia) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование видео</p>
                    </div>
                    <div class="form-group">
                        <label for="title_field">Название мультимедии</label>
                        <input id="title_field" value="{{ $multimedia->title }}" type="text" class="form-control"
                               name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="video_input">Ссылка на видео</label>
                        <input id="video_input" value="{{ $multimedia->url_video }}" type="text" class="form-control"
                               name="url_video" required>
                    </div>
                    <div class="form-group">
                        <label for="image_field">Выберите картинку:</label>
                        <input id="image_field" class="form-control" onchange="readURL(this);" type="file"
                               name="url_photo" accept="image/jpeg, image/png">
                        <br>
                        <img id="image" src="{{ asset('storage/medium/' . $multimedia->url_photo) }}" width="750"/>
                    </div>
                    <div>
                        <label for="lang">Выберите язык:<span class="text-danger">*</span></label>
                        <br>
                        <select id="lang" name="lang">
                            <option value="ru"{{ $multimedia->lang=='ru'? 'selected': ''}}>ru</option>
                            <option value="kg"{{ $multimedia->lang=='kg'? 'selected': ''}}>kg</option>
                        </select>
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
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                $('#image').width = 750;
            }
        }
    </script>
@endpush


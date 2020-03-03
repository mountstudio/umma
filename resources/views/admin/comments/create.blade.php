@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.comments.store') }}" method="POST">
                @csrf
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="form-group">
                    <label for="article">Выберите категорию:<span class="text-danger">*</span></label>
                    <br>
                    <select id="article" name="article_id">
                        @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="user_select">выберите пользователя:</label>
                    <br>
                    <select id="user_select" name="user_id">
                        <option value="0">Не зарегистрированный пользователь</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" id="user_form_div">
                    <label for="full_name_input">Полной имя:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="full_name_input" name="full_name" required>
                    <label for="phone_input">Телефон:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone_input" name="phone" required>
                    <label for="mail_input">Почта:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="mail_input" name="mail" required>
                </div>
                <label for="content_area">Контент:<span class="text-danger">*</span></label>
                <div id="editorjs" class="border"></div>
                <div class="form-group pt-2">
                    <label for="Content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="Content_area" class="form-control richTextBox is-invalid"
                              name="content"></textarea>
                </div>
                <button type="submit" title="{{ __('Добавить') }}"
                        class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/editor-conf.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#Content_area'
        });
    </script>
    <script>
        $("#user_select").change(e => {
            let selectValue = $(e.currentTarget).val();
            if (selectValue !== "0") {
                $("#user_form_div").addClass('d-none');
                $("#full_name_input").prop('required', false);
                $("#phone_input").prop('required', false);
                $("#mail_input").prop('required', false);
            } else {
                $("#user_form_div").removeClass('d-none');
                $("#full_name_input").prop('required', true);
                $("#phone_input").prop('required', true);
                $("#mail_input").prop('required', true);
            }
        })
    </script>
@endpush


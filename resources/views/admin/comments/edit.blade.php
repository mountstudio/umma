@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.comments.update', $comment) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование коментария</p>
                    </div>
                    <div class="form-group">
                        <label for="article">Выберите статью:<span class="text-danger">*</span></label>
                        <br>
                        <select id="article" name="article_id">
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}" {{ $comment->article_id == $article->id ? 'selected'
                                    : '' }}>{{ $article->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group pt-2">
                        <label for="Content_area">Контент:<span class="text-danger">*</span></label>
                        <textarea id="Content_area" class="form-control"
                                  name="content">{{ $comment->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="user_select">Выберите пользователя:</label>
                        <br>
                        <select id="user_select" name="user_id">
                            <option value="0">Не зарегистрированный пользователь</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $comment->user_id == $user->id ? 'selected' : ''
                                    }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{$comment->user ? 'd-none':''}}" id="user_form_div">
                        <label for="full_name_input">ФИО:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $comment->full_name }}" class="form-control" id="full_name_input"
                               name="full_name" required>
                        <label for="phone_input">Телефон:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $comment->phone }}" class="form-control" id="phone_input"
                               name="phone"
                               required>
                        <label for="mail_input">Почта:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $comment->mail }}" class="form-control" id="mail_input" name="mail"
                               required>
                    </div>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@push('scripts')
    <script>
        $("#user_select").change(e => {
            let selectValue = $(e.currentTarget).val();
            if (selectValue !== "0") {
                $("#user_form_div").addClass('d-none');
                $("#full_name_input").prop('required', false).val('');
                $("#phone_input").prop('required', false).val('');
                $("#mail_input").prop('required', false).val('');
            } else {
                $("#user_form_div").removeClass('d-none');
                $("#full_name_input").prop('required', true).val('{{ $comment->full_name }}');
                $("#phone_input").prop('required', true).val('{{ $comment->phone }}');
                $("#mail_input").prop('required', true).val('{{ $comment->mail }}');

            }
        })
    </script>
@endpush

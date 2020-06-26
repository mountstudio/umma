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
                <form action="{{ route('admin.questions.update', $question) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование вопроса</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input id="name_field" value="{{ $question->name }}" type="text" class="form-control"
                               name="name"
                               placeholder="" required>
                    </div>
                    <div id="categories">
                        <label for="categories">Выберите категорию:<span class="text-danger">*</span></label>
                        <br>
                        <select id="categories" name="category_id">
                            @foreach($questionCategories as $questionCategory)
                                <option
                                    value="{{ $questionCategory->id }}" {{ $question->category_id == $questionCategory->id ? 'selected' : '' }}>
                                    {{ $questionCategory->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group pt-2">
                        <label for="content_area">Вопрос:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control"
                                  name="content">{{ $question->content }}</textarea>
                    </div>
                    <div class="form-group pt-2">
                        <label for="answer_area">Ответ:</label>
                        <textarea id="answer_area" class="form-control"
                                  name="answer">{{ $question->answer }}</textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="is_anonim"
                               {{ $question->is_anonim ? 'checked':'' }} class="form-check-input" id="is_anonim_check">
                        <label class="form-check-label" for="is_anonim_check">Анонимно</label>
                    </div>
                    <div class="form-group">
                        <label for="user_select">выберите пользователя:</label>
                        <br>
                        <select id="user_select" name="user_id">
                            <option value="0">Не зарегистрированный пользователь</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $question->user_id == $user->id ? 'selected' : ''
                                    }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{$question->user ? 'd-none':''}}" id="user_form_div">
                        <label for="full_name_input">Полной имя:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $question->full_name }}" class="form-control" id="full_name_input"
                               name="full_name" required>
                        <label for="phone_input">Телефон:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $question->phone }}" class="form-control" id="phone_input"
                               name="phone" required>
                        <label for="mail_input">Почта:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $question->mail }}" class="form-control" id="mail_input"
                               name="mail" required>
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
                $("#full_name_input").prop('required', true).val('{{ $question->full_name }}');
                $("#phone_input").prop('required', true).val('{{ $question->phone }}');
                $("#mail_input").prop('required', true).val('{{ $question->mail }}');

            }
        })
    </script>
@endpush


@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.questions.store') }}" method="POST" novalidate>
                    @csrf
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление вопроса</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" name="name"
                               placeholder="" required>
                    </div>
                    <div id="categories">
                        <label for="categories">Выберите категорию:<span class="text-danger">*</span></label>
                        <br>
                        <select id="categories" name="category_id">
                            @foreach($questionCategories as $questionCategory)
                                <option value="{{ $questionCategory->id }}">{{ $questionCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group pt-2">
                        <label for="content_area">Вопрос:<span class="text-danger">*</span></label>
                        <textarea id="content_area" class="form-control"
                                  name="content"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="is_anonim" class="form-check-input" id="is_anonim_check">
                        <label class="form-check-label" for="is_anonim_check">Анонимно</label>
                    </div>
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
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
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



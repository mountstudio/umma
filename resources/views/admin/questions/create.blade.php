@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.questions.store') }}" method="POST" novalidate>
                @csrf
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
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
                <div class="form-group">
                    <label for="phone_field">Телефон:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" id="phone_field" required>
                </div>
                <div class="form-group">
                    <label for="name_field">Полное имя:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="full_name" id="name_field" required>
                </div>
                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush



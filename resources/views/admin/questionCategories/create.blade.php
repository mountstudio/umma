@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.questionCategories.store') }}" method="POST">
                    @csrf
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление категории вопроса</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Название категории:<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Название категории на кыргызском:<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" name="name_kg" required>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

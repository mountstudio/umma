@extends('admin.dashboard')

@section('dashboard_content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-md-10">
                <form action="{{ route('admin.questionCategories.update', $questionCategory) }}" method="POST">
                    @csrf
                    @method('put')
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование категории вопроса</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Название категории:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ $questionCategory->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Название категории на кыргызском:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name_kg"
                               value="{{ $questionCategory->name_kg }}" required>
                    </div>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

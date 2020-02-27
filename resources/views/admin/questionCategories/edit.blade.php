@extends('admin.dashboard')

@section('dashboard_content')
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
                <div class="form-group">
                    <label for="name">Название категории</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $questionCategory->name }}" required>
                </div>

                <button type="submit" title="{{ __('Изменить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection

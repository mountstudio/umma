@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.posterTypes.update', $posterType) }}" method="POST">
                @csrf
                @method('PUT')
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="form-group">
                    <label for="name_field">Наименование типа<span class="text-danger">*</span></label>
                    <input id="name_field" type="text" class="form-control" value="{{ $posterType->name }}" name="name" required>
                </div>
                <button type="submit" title="{{ __('Изменить') }}" class="btn n btn-success">{{ __('Изменить') }}</button>
            </form>
        </div>
    </div>
@endsection

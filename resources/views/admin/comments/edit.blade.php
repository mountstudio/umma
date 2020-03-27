@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.comments.update', $comment) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="form-group pt-2">
                    <label for="Content_area">Контент:<span class="text-danger">*</span></label>
                    <textarea id="Content_area" class="form-control"
                              name="content">{{ $comment->content }}</textarea>
                </div>
                <button type="submit" title="{{ __('Изменить') }}"
                        class="btn n btn-success">{{ __('Изменить') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush

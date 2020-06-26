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
                <div class="row justify-content-center">
                    <p class="font-weight-bold h2">Добавление журнала</p>
                </div>
                <form action="{{ route('admin.magazines.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control"
                               placeholder="Наименование" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf_input">pdf</label>
                        <input id="pdf_input" type="file" class="form-control" name="pdf" accept="application/pdf">
                    </div>
                    <div class="form-group">
                        <label for="kg_pdf_input">pdf на кыргызском</label>
                        <input id="kg_pdf_input" type="file" class="form-control" name="kg_pdf"
                               accept="application/pdf">
                    </div>
                    <div class="form-group">
                        <label for="status">Статус журнала</label>
                        <input id="status" type="text" class="form-control"
                               placeholder="Статус журнала" name="status">
                    </div>
                    <div class="form-group">
                        <label for="image_input">Картинка</label>
                        <input id="image_input" type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection


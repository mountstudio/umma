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
                <form action="{{ route('admin.magazines.update', $magazine) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование журанала</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Наименование<span class="text-danger">*</span></label>
                        <input value="{{ old('name', $magazine->name) }}" type="text" class="form-control" name="name"
                               id="name_field"
                               required>
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
                        <input value="{{ old('status', $magazine->status) }}" id="status" type="text" class="form-control"
                               placeholder="Статус журнала" name="status">
                    </div>
                    <div class="form-group">
                        <label for="image_input">Картинка</label>
                        <input id="image_input" type="file" class="form-control" onchange="readURL(this);" name="image"
                               accept="image/*">
                        <br>
                        <img id="image" src="{{ asset('storage/medium/' . $magazine->image) }}" width="750"/>
                    </div>
                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script language="javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
                $('#image').width = 750;
            }
        }
    </script>
@endpush

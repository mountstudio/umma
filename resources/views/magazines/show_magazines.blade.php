@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render('magazine', $magazine) }}
            </div>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row">
            @if($magazine->pdf and $magazine->kg_pdf)
                <div class="col-12 col-lg-8">
                    <button id="btn_switch" class="btn btn-primary" type="button">
                        Читать на русском
                    </button>
                </div>
                <div id="div_kg" class="col-12 col-lg-8">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->kg_pdf) }}" height="700" width="700"></iframe>
                </div>
                <div id="div_ru" class="col-12 col-lg-8 d-none">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->pdf) }}" height="700" width="700"></iframe>
                </div>
            @elseif($magazine->pdf)
                <div class="col-12 col-lg-8">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->pdf) }}" height="700" width="700"></iframe>
                </div>
            @elseif($magazine->kg_pdf)
                <div class="col-12 col-lg-8">
                    <h2>{{ $magazine->name }}</h2>
                    <iframe src="{{ asset('storage/pdf/' . $magazine->kg_pdf) }}" height="700" width="700"></iframe>
                </div>
            @endif
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('partials.pray')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var btnObserver = true;
        $('#btn_switch').click(function () {
            let $this = $(this);
            if (btnObserver) {
                $this.text("Читать на кыргызском");
                $('#div_ru').removeClass('d-none');
                $('#div_kg').addClass('d-none');
                btnObserver = !btnObserver;
            } else {
                $this.text("Читать на русском");
                $('#div_ru').addClass('d-none');
                $('#div_kg').removeClass('d-none');
                btnObserver = !btnObserver;
            }
        });
    </script>
@endpush


<div class="container bg-white">
    <div class="row justify-content-center">
        @include('partials.sidebar')
        <div class="col-12 col-lg-8">
            <div class="row">
                @include('articles.main_articles')
            </div>
        </div>
    </div>
</div>
@push('styles')

@endpush
@push('scripts')

@endpush

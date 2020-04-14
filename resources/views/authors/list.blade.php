@foreach($authors as $author)
    <div class="col-12 col-lg-3 col-md-12">
        @include('authors.card')
    </div>
@endforeach

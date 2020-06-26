
@foreach($articles->chunk(3) as $articleChunk)
    <div class="col-12 col-lg-12 col-md-{{ $articleChunk->count() == 1 ? "6" : '12' }} pb-4">
        <div class="row ">
            @foreach($articleChunk as $article)
                @include('articles.card')
            @endforeach
        </div>
    </div>
@endforeach

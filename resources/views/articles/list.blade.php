@foreach($articles->chunk(2) as $articleChunk)
    <div class="col-12 col-lg-{{ $articleChunk->count() == 1 ? "6" : '12' }} col-md-{{ $articleChunk->count() == 1 ? "6" : '12' }} pb-4">
        <div class="card-deck">
            @foreach($articleChunk as $article)
                @include('articles.card')
            @endforeach
        </div>
    </div>
@endforeach

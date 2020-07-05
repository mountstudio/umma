
<div class="row">
    @foreach($articles->chunk(3) as $articleChunk)
        @foreach($articleChunk as $article)
            @include('articles.card')
        @endforeach
    @endforeach
</div>

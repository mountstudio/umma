<div class="">
    @foreach($articles_for_subblock as $key=>$article)
        <div class="row py-1 {{ $key == $articles_for_subblock->count()-1 ? '' : 'border-bottom' }}">
            <div class="col-6 pr-0">
                <p class="mb-0 font-weight-bold">{{ $article->category->name }}</p>
                <p class="mb-0 small">{{ $article->created_at->format('d.m') }}</p>
            </div>
            <div class="col-6">
                <a href="{{ route('show.article', $article) }}">
                    <p class="mb-0 ">{{ $article->name }}</p>
                </a>
            </div>
        </div>
    @endforeach
    <div class="row justify-content-end no-gutters">
        <a href="{{ route('all.news') }}" class="text-dark">aрхив...</a>
    </div>
</div>

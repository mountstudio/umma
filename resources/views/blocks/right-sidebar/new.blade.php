<div class="border-for-news">
    @foreach($articles_for_subblock as $key=>$article)
        <div class="row mx-3 py-1 {{ $key == $articles_for_subblock->count()-1 ? '' : 'border-bottom' }}">
            <div class="col-4 pr-0">
                <p class="mb-0 font-weight-bold">{{ $article->category->name }}</p>
                <p class="mb-0 font-weight-bold">{{ $article->created_at->format('d.m') }}</p>
            </div>
            <div class="col-8">
                <p class="mb-0 ">{{ $article->name }}</p>
            </div>
        </div>
    @endforeach
    <div class="row justify-content-end pr-5">
        <a href="" class="text-dark">aрхив...</a>
    </div>
</div>

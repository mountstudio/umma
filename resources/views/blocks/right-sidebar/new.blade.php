<div class="">
    @foreach($articles_for_subblock as $key=>$article)
        <div class="row py-1 {{ $key == $articles_for_subblock->count()-1 ? '' : 'border-bottom' }}">
{{--            <div class="col-5 pr-0">--}}
{{--                <p class="mb-0 font-weight-bold">{{ $article->category->name }}</p>--}}

{{--            </div>--}}
            <div class="col-12">
                <a class="text-decoration-none" href="{{ route('show.article', $article) }}">
                    <p class="text-dark d-flex justify-content-between" style="line-height: 110%;">{{ $article->name }} <span class="small">{{ $article->created_at->format('d.m') }}</span></p>
{{--                    <p class="mb-0 small">{{ $article->created_at->format('d.m') }}</p>--}}
                </a>
            </div>
        </div>
    @endforeach
    <div class="row justify-content-end no-gutters">
        <a href="{{ route('all.news') }}" class="text-dark text-decoration-none">все новости...</a>
    </div>
</div>

<div class="">
    @foreach($articles_for_subblock as $key=>$article)
        <div class="row py-3 {{ $key == $articles_for_subblock->count()-1 ? '' : 'border-bottom' }}">
            {{--            <div class="col-5 pr-0">--}}
            {{--                <p class="mb-0 font-weight-bold">{{ $article->category->name }}</p>--}}

            {{--            </div>--}}
            <div class="col-9">
                <a class="text-decoration-none " href="{{ route('show.article', $article) }}"><p
                        class="text-dark text-crop mb-0" style="line-height: 110%;">{{ $article->name }} </p></a>
            </div>
            <div class="col-3 d-flex align-items-end">
                <a class="text-decoration-none " href="{{ route('show.article', $article) }}">
                    <span class="small text-orange">{{ $article->created_at->format('d.m') }}</span>
                    {{--                    <p class="mb-0 small">{{ $article->created_at->format('d.m') }}</p>--}}
                </a>
            </div>
        </div>
    @endforeach
    <div class="row justify-content-end no-gutters">
        <a href="{{ route('all.news') }}" class="text-orange text-decoration-none small">все новости...</a>
    </div>
</div>

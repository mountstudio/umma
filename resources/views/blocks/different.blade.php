<div class="container bg-white pt-5">
    <div class="row">

        @foreach($articlesByCategory as $category)
            <div class="col-12 col-md-6 col-lg-3 px-3 pb-2">
                <h4 class="pl-3">{{ $category->name }}</h4>
                @foreach($category->articles->take(2) as $article)
                    <a href="{{ route('show.article', $article) }}">
                        <div class="card mb-2">
                            <img src="{{ asset('storage/small/' . $article->logo) }}" class="card-img-top p-2"
                                 alt="...">
                            <div class="card-body text-center">
                                <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h6 class="card-title text-uppercase">{{ $article->name }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endforeach
        <div class="col-12 col-md-6 col-lg-2 px-3 pb-2">
            <h4 class="pl-3">Журналы</h4>
            @foreach($magazines as $magazine)
                <a href="{{ route('show.magazine', $magazine) }}">
                    <div class="card mb-3">
                        <img src="{{ asset('storage/small/'. $magazine->image) }}" class="card-img" alt="...">
                        <div class="card-img-overlay row m-0 align-items-end text-center ">
                            <div class="row justify-content-center">
                                <div class="col-12 rounded bg-black-50 py-3 text-white">
                                    <h6 class="text-uppercase">{{ $magazine->name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="col-12 row justify-content-center text-center  py-4">
            <a href="{{ route('all.news') }}" class="button button--winona button--border-thin button--round-s" data-text="Читать еще"><span>Читать еще</span>
            </a>
        </div>
    </div>
</div>


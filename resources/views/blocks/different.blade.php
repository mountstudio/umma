<div class="container bg-white pt-5">
    <div class="row">


        <div class="col-12 col-lg-9">
            <div class="row">
                @foreach($articlesByCategory as $article)
                    <div class="col-12 col-md-6 col-lg-4 px-3 pb-3">
                        <a class="text-dark text-decoration-none" href="{{ route('show.article', $article) }}">
                            @include('articles.second_card')
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
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
            <a href="{{ route('all.news') }}" class="button button--winona button--border-thin button--round-s"
               data-text="Читать еще"><span>Читать еще</span>
            </a>
        </div>
    </div>
</div>


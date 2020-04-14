<div class="container bg-white pt-3 my-5">
    <div class="col pr-3">
        <h2 class="text-uppercase"><a class="text-dark" href="{{ route('all.posters') }}">Афиша</a></h2>
    </div>
    <div class="row">
        <div class="col-{{ $posters->count() == 1 ? '3' : $posters->count() == 2 ? '6' : $posters->count() == 3 ? '9' : '12' }}">
            <div class="card-deck">


                @foreach($posters as $poster)
                    @include('poster.card')
                @endforeach


            </div>
        </div>
    </div>
</div>

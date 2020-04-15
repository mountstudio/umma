<div class="container bg-white pt-3 my-5">
    <div class="col pr-3">
        <h2 class="text-uppercase"><a class="text-dark" href="{{ route('all.posters') }}">Афиша</a></h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">


                @foreach($posters as $poster)
                    <div class="col-12 col-md-6 col-lg-3 mb-2 mb-lg-0">
                        @include('poster.card')
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-3">
    <div class="col pr-3">
        <h2 class="text-uppercase">Афиша</h2>
    </div>
    <div class="row">
        @for($i = 0; $i < 4; $i++)
            <div class="col-3 px-3">
                <div class="card">
                    <img src="{{ asset('img/exmaple-2.jpg') }}" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

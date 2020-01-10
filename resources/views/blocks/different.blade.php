<div class="container-fluid pt-5">
{{--    <div class="row">--}}
{{--        <div class="col-4">--}}
{{--            <h3>Мир души</h3>--}}
{{--        </div>--}}
{{--        <div class="col-4">--}}
{{--            <h3>Люди в исламе</h3>--}}
{{--        </div>--}}
{{--        <div class="col-4">--}}
{{--            <h3>О наболевшом</h3>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="row">
        <div class="col-4 px-3 pb-2">
            <h4 class="pl-3">Мир души</h4>
            <div class="card">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 px-3 pb-2">
            <h4 class="pl-3">Люди в исламе</h4>
            <div class="card">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 px-3 pb-2">
            <h4 class="pl-3">О наболевшом</h4>
            <div class="card">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}"  style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        @for($i = 0; $i < 3; $i++)--}}
{{--            <div class="col-4 px-1 pb-2">--}}
{{--                <div class="card">--}}
{{--                    <img src="..." class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">Card title</h5>--}}
{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endfor--}}
    </div>
    <div class="row">
        @for($i = 0; $i < 3; $i++)
            <div class="col-4 px-3 pb-2">
                <div class="card">
                    <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" class="" style="width: 36%" alt="Узор">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
<div class="col-12 text-center  py-4">
    <a href="" class="text-black-50 rounded btn-lg border">Читать еще</a>
</div>

<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 px-3 pb-2">
            <h4 class="pl-3">Мир души</h4>
            <div class="card mb-2">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="card-title text-uppercase">Трогательная история</h6>
                            <p class="card-text text-uppercase" style="min-height: 52px;">Покаяние малика ИБН Динар</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="card-title text-uppercase">Трогательная история</h6>
                            <p class="card-text text-uppercase" style="min-height: 52px;">Покаяние малика ИБН Динар</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-3 pb-2">
            <h4 class="pl-3">Люди в исламе</h4>
            <div class="card mb-2">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="card-title text-uppercase">Мнение ученых</h6>
                            <p class="card-text text-uppercase" style="min-height: 52px;">Украденное слово "Аллаху
                                Акбар"</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="card-title text-uppercase">Мнение ученых</h6>
                            <p class="card-text text-uppercase" style="min-height: 52px;">Украденное слово "Аллаху
                                Акбар"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-3 pb-2">
            <h4 class="pl-3">О наболевшом</h4>
            <div class="card mb-2">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="text-uppercase">Сахабы</h6>
                            <p class="card-text text-uppercase" style="min-height: 52px;">Праведный халиф Умар Ибн
                                Хаттаб</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <img src="{{ asset('img/example-3.jpg') }}" class="card-img-top p-2" alt="...">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hello_html_m4e1bf07b.png') }}" style="width: 36%" alt="Узор">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="text-uppercase">Сахабы</h6>
                            <p class="card-text text-uppercase" style="min-height: 52px;">Праведный халиф Умар Ибн
                                Хаттаб</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2 px-3 pb-2">
            <h4 class="pl-3">Журналы</h4>
                @foreach($magazines as $magazine)
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
                @endforeach
        </div>
    </div>
</div>
<div class="col-12 text-center  py-4">
    <a href="" class="text-black-50 rounded btn-lg border">Читать еще</a>
</div>

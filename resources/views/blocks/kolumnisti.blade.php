<div class="container-fluid">
    <hr style="background-color: black;color: black;">
    <div class="row justify-content-around">
        <div class="col-12 col-lg-7">
            <div class="col">
                <h2 class="text-uppercase">Колумнисты</h2>
            </div>
            <div class="d-lg-flex border border-3 rounded p-3 text-center">
                <div class="col-12 col-lg-3 col-md-12">
                    <img src="{{ asset('icons/icon-for-kolumn-1.png') }}" alt="">
                    <h3 class="font-weight-bold h5 pt-2" style="min-height: 56px;">Тариэль Малашев</h3>
                    <p>Что значит “интеллектуальный ислам”?</p>
                </div>
                <div class="col-12 col-lg-3 col-md-12">
                    <img src="{{ asset('icons/icon-forkolumn-2.png') }}" alt="">
                    <h3 class="font-weight-bold h5 pt-2" style="min-height: 56px;">Саид Ибраимов</h3>
                    <p>Искусство—как призыв. Когда настанет рассвет творчества в КР?</p>
                </div>
                <div class="col-12 col-lg-3 col-md-12">
                    <img src="{{ asset('icons/icon-for-kolum-3.png') }}" alt="">
                    <h3 class="font-weight-bold h5 pt-2" style="min-height: 56px;">Айжамал Каразак</h3>
                    <p>Девушка в платке: 7 вещей, которые стоит зарубить себе на носу в универе</p>
                </div>
                <div class="col-12 col-lg-3 col-md-12">
                    <img src="{{ asset('icons/icon-for-kolumn-4.png') }}" alt="">
                    <h3 class="font-weight-bold h5 pt-2" style="min-height: 56px;">Айгерим Алимбекова</h3>
                    <p>Говорить лучше, чем писать? О псевдо-блоггерах и ужасах в сети</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-12">
            <div class="col">
                <a href="{{ route('hadisdnya') }}"><h2 class="text-uppercase text-dark">Хадис дня</h2></a>
            </div>
            <div class="border border-4 border-orange rounded p-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore doloribus, ducimus eos facere ipsam laudantium nihil, nisi non nostrum odio odit omnis quas quisquam quod repellendus rerum sunt totam.
                </p>
                <div class="col-12 text-right">
                    <a href="{{ route('hadisdnya') }}" class="" style="color: grey;">Читать далее...</a>
                </div>
            </div>
        </div>
    </div>
</div>

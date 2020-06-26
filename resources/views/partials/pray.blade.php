<div class="col-12 border border-3 rounded  p-3">
    <ul class="nav nav-pills d-flex justify-content-around  mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link p-1 small namaz-tabs active" id="pills-bishkek-tab" data-toggle="pill"
               href="#pills-bishkek" role="tab"
               aria-controls="pills-bishkek" aria-selected="true">Бишкек/Чуй</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1 small rounded-0  namaz-tabs" id="pills-ik-tab" data-toggle="pill"
               href="#pills-ik" role="tab"
               aria-controls="pills-ik" aria-selected="false">ИК</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1 small rounded-0  namaz-tabs" id="pills-talas-tab" data-toggle="pill"
               href="#pills-talas" role="tab"
               aria-controls="pills-talas" aria-selected="false">Талас</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1 small rounded-0  namaz-tabs" id="pills-narin-tab" data-toggle="pill"
               href="#pills-narin" role="tab"
               aria-controls="pills-narin" aria-selected="false">Нарын</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1 small rounded-0  namaz-tabs" id="pills-ja-tab" data-toggle="pill"
               href="#pills-ja" role="tab"
               aria-controls="pills-ja" aria-selected="false">Ж-А</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1 small  namaz-tabs" id="pills-osh-tab" data-toggle="pill" href="#pills-osh" role="tab"
               aria-controls="pills-osh" aria-selected="false">Ош</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-1 small  namaz-tabs" id="pills-batken-tab" data-toggle="pill" href="#pills-batken"
               role="tab"
               aria-controls="pills-batken" aria-selected="false">Баткен</a>
        </li>
    </ul>
    <a href="{{ route('monthly.time.prayer') }}"><img src="{{ asset('img/animation.png') }}" class="img-fluid w-100"
                                              alt="animation"></a>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-bishkek" role="tabpanel" aria-labelledby="pills-bishkek-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="bishkek_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="bishkek_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="bishkek_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="bishkek_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="bishkek_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="bishkek_isha" class="">21:30</span></p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-ik" role="tabpanel" aria-labelledby="pills-ik-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="ik_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="ik_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="ik_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="ik_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="ik_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="ik_isha" class="">21:30</span></p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-talas" role="tabpanel" aria-labelledby="pills-talas-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="talas_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="talas_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="talas_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="talas_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="talas_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="talas_isha" class="">21:30</span></p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-narin" role="tabpanel" aria-labelledby="pills-narin-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="naryn_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="naryn_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="naryn_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="naryn_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="naryn_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="naryn_isha" class="">21:30</span></p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-ja" role="tabpanel" aria-labelledby="pills-ja-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="ja_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="ja_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="ja_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="ja_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="ja_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="ja_isha" class="">21:30</span></p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-osh" role="tabpanel" aria-labelledby="pills-osh-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="osh_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="osh_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="osh_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="osh_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="osh_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="osh_isha" class="">21:30</span></p>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-batken" role="tabpanel" aria-labelledby="pills-batken-tab">
            <div class="row justify-content-around">
                <p class="mx-auto text-center small"><span>Фаджр</span><br><span id="batken_fadjr" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Шурук</span><br><span id="batken_shuruk" class="">5:30</span></p>
                <p class="mx-auto text-center small"><span>Зухр</span><br><span id="batken_zuhr" class="">13:10</span></p>
                <p class="mx-auto text-center small"><span>Аср</span><br><span id="batken_asr" class="">18:00</span></p>
                <p class="mx-auto text-center small"><span>Шам</span><br><span id="batken_sham" class="">19:30</span></p>
                <p class="mx-auto text-center small"><span>Ишаа</span><br><span id="batken_isha" class="">21:30</span></p>
            </div>
        </div>
    </div>
</div>
<script>
    let timeSpans = ["fadjr", "shuruk", "zuhr", "asr", "sham", "isha"];
    window.onload = function () {
        $.ajax({
            url: "{{ route('time.prayer') }}",
            dataType: 'json',
            type: "GET",
            success: function (data) {
                for (let city in data) {
                    let indexTypePrayer = 0;
                    data[city].forEach(function (item) {
                        let span = document.getElementById(city + "_" + timeSpans[indexTypePrayer]);
                        span.textContent = item;
                        indexTypePrayer = indexTypePrayer + 1;
                    })

                }
            },
            error: {}
        });
    };
</script>

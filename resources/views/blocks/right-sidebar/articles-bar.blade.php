<h2>Статьи</h2>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" style="color: #1d643b" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row d-flex mx-1 p-3 border-for-news">
            @for($i = 0; $i < 9; $i++)
                <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p class="mb-0 font-weight-bold">Мечети</p>
                    <p class="font-weight-bold">02.04</p>
                </div>
                <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p>Открылась самая большая мечеть в Турции</p>
                </div>
            @endfor
        </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row d-flex mx-1 p-3 border-for-news">
            @for($i = 0; $i < 9; $i++)
                <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p class="mb-0 font-weight-bold">Мечети</p>
                    <p class="font-weight-bold">02.04</p>
                </div>
                <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p>Открылась самая большая мечеть в Турции</p>
                </div>
            @endfor
        </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row d-flex mx-1 p-3 border-for-news">
            @for($i = 0; $i < 9; $i++)
                <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p class="mb-0 font-weight-bold">Мечети</p>
                    <p class="font-weight-bold">02.04</p>
                </div>
                <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p>Открылась самая большая мечеть в Турции</p>
                </div>
            @endfor
        </div>
    </div>
</div>

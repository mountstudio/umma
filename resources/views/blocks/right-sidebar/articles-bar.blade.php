<h2 class="text-center py-2">Статьи</h2>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active border-for-news" style="color: #1d643b" id="pills-home" role="tabpanel"
         aria-labelledby="pills-home-tab">
        @for($i = 0; $i < 9; $i++)
            <div class="row  mx-1 p-2 ">
                <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p class="mb-0 font-weight-bold">Мечети</p>
                    <p class="font-weight-bold">02.04</p>
                </div>
                <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p>Открылась самая большая мечеть в Турции</p>
                </div>
            </div>
        @endfor
        <div class="row justify-content-end pr-5">
            <a href="" class="text-dark">aрхив...</a>
        </div>
    </div>
    <div class="tab-pane fade border-for-news" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @for($i = 0; $i < 9; $i++)
            <div class="row  mx-1 p-2 ">
                <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p class="mb-0 font-weight-bold">Мечети</p>
                    <p class="font-weight-bold">02.04</p>
                </div>
                <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p>Открылась самая большая мечеть в Турции</p>
                </div>
            </div>
        @endfor
        <div class="row justify-content-end pr-5">
            <a href="" class="text-dark">aрхив...</a>
        </div>
    </div>
    <div class="tab-pane fade border-for-news" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        @for($i = 0; $i < 9; $i++)
            <div class="row  mx-1 p-2 ">
                <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p class="mb-0 font-weight-bold">Мечети</p>
                    <p class="font-weight-bold">02.04</p>
                </div>
                <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                    <p>Открылась самая большая мечеть в Турции</p>
                </div>
            </div>
        @endfor
        <div class="row justify-content-end pr-5">
            <a href="" class="text-dark">aрхив...</a>
        </div>
    </div>
</div>

<div class="border-for-news">
    @for($i = 0; $i < 9; $i++)
        <div class="row mx-3 py-1 {{ $i == 8 ? '' : 'border-bottom' }}">
            <div class="col-3">
                <p class="mb-0 font-weight-bold">Мечети</p>
                <p class="mb-0 font-weight-bold">02.04</p>
            </div>
            <div class="col-9">
                <p class="mb-0 ">Открылась самая большая мечеть в Турции</p>
            </div>
        </div>
    @endfor
    <div class="row justify-content-end pr-5">
        <a href="" class="text-dark">aрхив...</a>
    </div>
</div>

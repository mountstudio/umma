<div class="container-fluid">
    <div class="row">
        <div class="col-4 ">
            <div class="border-for-news">
                @for($i = 0; $i < 9; $i++)
                    <div class="row mx-3 py-3">
                        <div class="col-3 {{ $i == 8 ? '' : 'border-bottom' }}">
                            <p class="mb-0 font-weight-bold">Мечети</p>
                            <p class="mb-0 font-weight-bold">02.04</p>
                        </div>
                        <div class="col-9 {{ $i == 8 ? '' : 'border-bottom' }}">
                            <p class="mb-0 ">Открылась самая большая мечеть в Турции</p>
                        </div>
                    </div>
                @endfor
                <div class="row justify-content-end pr-5">
                    <a href="" class="text-dark">aрхив...</a>
                </div>
            </div>
            <div class="pt-3">
                @include('blocks.right-sidebar.animation')
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded-0 active" id="pills-home-tab" data-toggle="pill"
                               href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Свежее</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" id="pills-profile-tab" data-toggle="pill"
                               href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Актуальное</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" id="pills-contact-tab" data-toggle="pill"
                               href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Тема
                                дня</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-12 py-4">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @for($i = 0; $i < 6; $i++)
                                <div class="col-4 pb-4">
                                    @include('articles.card')
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @for($i = 0; $i < 6; $i++)
                                <div class="col-4 pb-4">
                                    @include('articles.card')
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @for($i = 0; $i < 6; $i++)
                                <div class="col-4 pb-4">
                                    @include('articles.card')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@push('styles')

@endpush
@push('scripts')

@endpush

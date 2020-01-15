<div class="container-fluid">
    <div class="row">
        <div class="col-4 ">
            <ul class="nav nav-pills d-flex justify-content-center mb-0" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded-0 bg-secondary text-white active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Свежее</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 bg-secondary text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Актуальное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 bg-secondary text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Тема дня</a>
                </li>
            </ul>
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
            <div class="pt-3">
                @include('blocks.right-sidebar.animation')
            </div>
        </div>

        <div class="col-8">
          <div class="row">
              @for($i = 0; $i < 6; $i++)
                  <div class="col-6 pb-4">
                      <div class="card">
                          <img src="{{ asset('img/example-1.jpg') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                              <div class="col-3 text-white" style="border-bottom-right-radius: 15px;border-top-right-radius: 15px; background-color: #008500;margin-left: -1.3rem;margin-top: -2.10rem;">
                                  <p style="font-size: 13px">Интересное</p>
                              </div>
                              <h6 class="text-left">Драпировка головы:</h6>
                              <p class="card-text">Манифест и целый мир мусульманки</p>
                          </div>
                      </div>
                  </div>
              @endfor
          </div>
        </div>
    </div>
</div>



@push('styles')

@endpush
@push('scripts')

@endpush

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <ul class="nav nav-pills d-flex justify-content-center mb-0" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Свежее</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Актуальное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Тема дня</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row d-flex mx-1 p-2 border rounded border-2">
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
                    <div class="row d-flex mx-1 p-2 border rounded border-2">
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
                    <div class="row d-flex mx-1 p-2 border rounded border-2">
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
        </div>
        <div class="col-8">
          <div class="row">
              @for($i = 0; $i < 6; $i++)
                  <div class="col-6 pb-4">
                      <div class="card">
                          <img src="{{ asset('img/example-1.jpg') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p>Интересное</p>
                              <h5 class="card-title text-left">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                  the card's content.</p>
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

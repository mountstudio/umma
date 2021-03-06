<div class="container-fluid pt-5 bg-for-footer">
    <div class="row justify-content-around">
        <div class="col-12 col-lg-4 col-md-4">
            <a href="{{ route('welcome') }}"><img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="logo"></a>
        </div>
        <div class="col-12 col-md-7 pt-2 ">
            <div class="row align-items-center justify-content-center justify-content-lg-end">
                <a href="https://www.facebook.com/ummamag.kg"><i class="fab fa-facebook fa-lg text-orange mr-3"></i></a>
                <a href="https://www.instagram.com/ummamagkg/"><i
                        class="fab fa-instagram fa-lg text-orange mr-3"></i></a>
                <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be"><i
                        class="fab fa-youtube fa-lg text-orange mr-3"></i></a>
                <a href=""><i class="fas fa-rss fa-lg text-orange mr-3"></i></a>
                <a href=""></a>
                <ul class="nav ml-3">
                    <li class="text-for-footer nav-item mr-4"><a class="text-orange text-decoration-none"
                                                                 href="{{ route('all.magazines') }}">{{ __('main.about_us') }}</a>
                    </li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-orange text-decoration-none"
                                                                 href="{{ route('vacancies') }}">{{ __('main.vacancies') }}</a>
                    </li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-orange text-decoration-none"
                                                                 href="{{ route('all.questions') }}">{{ __('main.ask_a_scientist_a_question') }}</a>
                    </li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-orange text-decoration-none"
                                                                 href="{{ route('advertisers') }}">{{ __('main.for_advertisers') }}</a>
                    </li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-orange text-decoration-none" href="#"
                                                                 data-toggle="modal"
                                                                 data-target="#exampleModal">{{ __('main.subscription') }}</a>
                    </li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ __('main.sign_up_for_our_newsletter') }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5">
                                <form action="{{ route('user.subscriber.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col  text-center">
                                            <label for="mail_input">Email address</label>
                                            <input type="email" name="email" class="form-control" id="mail_input"
                                                   aria-describedby="emailHelp">
                                        </div>
                                        <div class="row justify-content-around">
                                            <button type="submit"
                                                    class="button button--isi button--border-thick button--round-l button--size-s text-white">
                                                {{ __('main.subscribe') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="row justify-content-center small">
                                    <p>{{ __('main.email_event') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-around">
        <div class="col-12 col-md-6 col-lg-6 pt-2">
            <p class="text-lg-left text-center">{{ __('main.info_footer') }} </p>
        </div>
        <div class="col-12 col-md-6 text-lg-right text-center">
            <p class="h4 font-weight-bold">{{ __('main.contact_us') }}</p>
            <a href="tel:+996 777 505 005 "><p class="p-0 m-0 txt-for-black">Тел: +996 777 505 005</p></a>
            <a href="mailto:"><p class="p-0 m-0 txt-for-black">{{ __('main.address') }} ummamagkg@gmail.com</p></a>
            <p class="p-0 m-0 txt-for-black">{{ __('main.info_address') }} </p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-12 text-center">
            <p>©{{ __('main.all_seq') }} “Umma 2019”</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <a href="https://mount.kg/">
            <p class="small text-secondary">Made with <span class="text-danger">&hearts;</span> by WeLumiCool</p>
        </a>
    </div>
</div>


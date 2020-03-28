<div class="container-fluid pt-5 bg-for-footer">
    <div class="row justify-content-around">
        <div class="col-12 col-lg-4 col-md-4">
            <a href="{{ route('welcome') }}"><img src="{{ asset('img/umma_logo.png') }}" class="img-fluid" alt=""></a>
        </div>
        <div class="col-12 col-md-7 pt-2 ">
            <div class="row align-items-center justify-content-center justify-content-lg-end">
                <a href="https://www.facebook.com/ummamag.kg"><i class="fab fa-facebook fa-lg text-white mr-3"></i></a>
                <a href="https://www.instagram.com/ummamagkg/"><i
                        class="fab fa-instagram fa-lg text-white mr-3"></i></a>
                <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be"><i
                        class="fab fa-youtube fa-lg text-white mr-3"></i></a>
                <a href=""><i class="fas fa-rss fa-lg text-white mr-3"></i></a>
                <a href=""></a>
                <ul class="nav ml-3">
                    <li class="text-for-footer nav-item mr-4"><a class="text-white" href="{{ route('all.magazines') }}">О
                            нас</a></li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-white" href="{{ route('vacancies') }}">Вакансии</a>
                    </li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-white" href="{{ route('all.questions') }}">Задать
                            вопрос ученому</a></li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-white" href="{{ route('advertisers') }}">Рекламодателям</a>
                    </li>
                    <li class="text-for-footer nav-item mr-4"><a class="text-orange" href="#" data-toggle="modal" data-target="#exampleModal">Подписка</a>
                    </li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Подпишитесь на рассылку новостей!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col  text-center">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="row justify-content-around">
                                        <a href="#" class="button button--isi button--border-thick button--round-l button--size-s text-white"> Подписаться</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <p>Напишите свой email адресс, чтобы всегда быть вкурсе событий</p>
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
            <p class="text-left">Информационно-просветительский сайт ummamag.kg.
                Вся информация, размещенная на данном веб-сайте, предназначена только для персонального
                использования и не подлежит распространению без разрешения Ummamag.kg.
                Редакция не несет ответственности за содержимое перепечатанных материалов
                и высказывания отдельных лиц.</p>
        </div>
        <div class="col-12 col-md-6 text-lg-right">
            <p class="">Свяжитесь с нами:</p>
            <a href="tel:+996 777 505 005 "><p class="p-0 m-0 txt-for-black">Тел: +996 777 505 005</p></a>
            <a href="mailto:"><p class="p-0 m-0 txt-for-black"> Эл.адрес: ummamagkg@gmail.com</p></a>
            <p class="p-0 m-0 txt-for-black"> Почтовый адрес: г. Бишкек, ул. Грибоедова, 16</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>©Все права защищены “Umma 2019”</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <a href="https://mount.kg/">
            <p class="small text-secondary">Made with <span class="text-danger">&hearts;</span> by Mount</p>
        </a>
    </div>
</div>


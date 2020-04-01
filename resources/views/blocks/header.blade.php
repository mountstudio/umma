<div class="container bg-white">
    <div class="row">
        <div class="col-12 col-lg-6 pt-3 text-center order-1">
            <div class="row justify-content-center justify-content-lg-end mb-4">
                <div class="">
                    @if(Auth::user())
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class=" text-orange"> {{ __('Выйти') }}</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-orange  mx-3">
                            {{ __('Войти') }}
                        </a>
                        <a href="{{ route('register') }}" class="text-orange ">
                            {{ __('Регистрация') }}
                        </a>
                    @endif
                </div>
                <div class="d-flex px-4">
                    <a href="{{ route('language.switch', 'en') }}"><p class="mr-2 text-orange small mb-0">EN</p></a>
                    <a href="{{ route('language.switch', 'ru') }}"><p class="text-orange small mb-0">RU</p></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6  text-center order-0 ">
            <div id="sb-search" class="sb-search col-12 col-lg-8 float-left" >
                <form action="{{ route('search') }}" method="GET">
                    <input class="sb-search-input" placeholder="Введите поисковый запрос..." type="text" value=""
                           name="search"
                           id="search" >
                    <input class="sb-search-submit" type="submit" >
                    <span class="sb-icon-search" ></span>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12  text-center">
            <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('img/umma_logo.png') }}" alt=""
                                                                       class="img-fluid justify-content-center"></a>
        </div>
        <div class="col-12  text-center py-2">
            <a href="https://www.facebook.com/ummamag.kg"><i class="fab fa-facebook fa-lg text-orange mr-3"></i></a>
            <a href="https://www.instagram.com/ummamagkg/"><i class="fab fa-instagram fa-lg text-orange mr-3"></i></a>
            <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be"><i
                    class="fab fa-youtube fa-lg text-orange mr-3"></i></a>
            <a href=""><i class="fas fa-rss fa-lg text-orange"></i></a>
        </div>
        <nav class="navbar navbar-expand-lg mx-0 mx-lg-auto col-12">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="col-12">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-dark text-menu pl-0" href="{{ route('need_to_know') }}" title=""
                               style="">Надо знать</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('it_is_interesting') }}" title=""
                               style="">Это интересно</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('education') }}" title="" style="">Просвещение</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('about_sore') }}" title="" style="">О
                                наболевшем</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('interview') }}" title="" style="">Интервью</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('all.media') }}" title="" style="">Медиа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('all.news') }}" title="" style="">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-menu" href="{{ route('all.magazines') }}" title=""
                               style="">Журнал</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <marquee behavior="alternate" direction="right" class="bg-for-middle-div">
            <p class="h6 py-2">Трансляция: Текст, Видео, Галерея</p>
        </marquee>
    </div>
</div>


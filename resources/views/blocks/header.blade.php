<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 pt-3 text-center">
            <div class="row pt-2 ">
                <h5 class="mr-2 text-orange">RU</h5>
                <h5 class="text-orange">KG</h5>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-orange text-orange">
                        {{ __('Войти') }}
                    </button>
                    <button type="submit" class="btn btn-orange text-orange">
                        {{ __('Регистрация') }}
                    </button>
                </div>
            </div>

        </div>
{{--        <div class="col-12 col-lg-3 pt-3 text-center">--}}

{{--        </div>--}}
        <div class="col-12 col-lg-6 pt-3 text-center">

            <div id="sb-search" class="sb-search col-12 col-lg-8">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search"
                           id="search">
                    <input class="sb-search-submit" type="submit">
                    <span class="sb-icon-search"></span>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-7 text-right pr-0">
            <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('img/umma_logo.png') }}" alt=""
                                                                       class="img-fluid justify-content-center"></a>
        </div>
        <div class="col-lg-5 m-0 p-0 justify-content-center justify-content-lg-end">
            <a href="https://www.facebook.com/ummamag.kg"><i class="fab fa-facebook fa-lg text-orange mr-3"></i></a>
            <a href="https://www.instagram.com/ummamagkg/"><i class="fab fa-instagram fa-lg text-orange mr-3"></i></a>
            <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be"><i
                    class="fab fa-youtube fa-lg text-orange mr-3"></i></a>
            <a href=""><i class="fas fa-rss fa-lg text-orange"></i></a>
        </div>
        <nav class="navbar navbar-expand-lg mx-0 mx-lg-auto">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="col-12">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-dark  pl-0" href="{{ route('need_to_know') }}" title="" style="">Надо знать</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('it_is_interesting') }}" title="" style="">Это интересно</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('education') }}" title="" style="">Просвещение</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('about_sore') }}" title="" style="">О наболевшем</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('interview') }}" title="" style="">Интервью</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('all.media') }}" title="" style="">Медиа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('all.news') }}" title="" style="">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('all.magazines') }}" title="" style="">Журнал</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
{{--        <div class="col-12">--}}
{{--            --}}
{{--            <nav class="navbar navbar-expand-md navbar-light shadow-none pt-0 ">--}}
{{--                --}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                        aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                        aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}
{{--                <ul class="nav collapse navbar-collapse d-block d-lg-none mb-0 px-4 justify-content-center" id="navbarSupportedContent">--}}
{{--                    <li class="nav-item ">--}}
{{--                        <a class="nav-link text-dark text-menu pl-0" href="{{ route('need_to_know') }}" title="" style="">Надо знать</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('it_is_interesting') }}" title="" style="">Это--}}
{{--                            интересно</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('education') }}" title="" style="">Просвещение</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('about_sore') }}" title="" style="">О наболевшем</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('interview') }}" title="" style="">Интервью</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('all.media') }}" title="" style="">Медиа</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('all.news') }}" title="" style="">Новости</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-dark text-menu" href="{{ route('all.magazines') }}" title="" style="">Журнал</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
        <marquee behavior="alternate" direction="right" >
            <p class="bg-for-middle-div h4 pt-2 pb-2">Трансляция: Текст, Видео, Галерея</p>
        </marquee>
    </div>
{{--    <div class="row d-none d-lg-block">--}}
{{--        <ul class="nav mb-0 px-4 justify-content-center" >--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link text-dark text-menu pl-0" href="{{ route('need_to_know') }}" title="" style="">Надо знать</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('it_is_interesting') }}" title="" style="">Это--}}
{{--                    интересно</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('education') }}" title="" style="">Просвещение</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('about_sore') }}" title="" style="">О наболевшем</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('interview') }}" title="" style="">Интервью</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('all.media') }}" title="" style="">Медиа</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('all.news') }}" title="" style="">Новости</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('all.magazines') }}" title="" style="">Журнал</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
</div>



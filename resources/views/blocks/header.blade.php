<div class="container-fluid">
    <div class="col-auto d-flex justify-content-end pt-2">
        <h5 class="mr-2 text-orange">RU</h5>
        <h5 class="text-orange">KG</h5>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-none pt-0 col-12">
        <div class="col-12 col-lg-7 text-right pr-0">
            <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('img/umma_logo.png') }}" alt=""
                                                                       class="img-fluid justify-content-center"></a>
        </div>
        <div class="col-12 col-lg-5 text-right m-0 p-0">
            <a href="https://www.facebook.com/ummamag.kg"><i class="fab fa-facebook fa-lg text-orange mr-3" ></i></a>
            <a href="https://www.instagram.com/ummamagkg/"><i class="fab fa-instagram fa-lg text-orange mr-3" ></i></a>
            <a href="https://www.youtube.com/watch?v=pfab0uXYDpY&feature=youtu.be"><i class="fab fa-youtube fa-lg text-orange mr-3" ></i></a>
            <a href=""><i class="fas fa-rss fa-lg text-orange"></i></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<ul class="navbar navbar-collapse  d-flex ul-for-menu mb-0 px-4 ">
    <li class="nav-item ">
        <a class="nav-link text-dark text-menu pl-0" href="{{ route('need_to_know') }}" title="" style="">Надо знать</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('it_is_interesting') }}" title="" style="">Это интересно</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('education') }}" title="" style="">Просвещение</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('about_sore') }}" title="" style="">О наболевшем</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('interview') }}" title="" style="">Интервью</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('media') }}" title="" style="">Медиа</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('news_page') }}" title="" style="">Новости</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('magazines') }}" title="" style="">Журнал</a>
    </li>
</ul>
<div class="text-center">
    <p class="bg-for-middle-div pt-2 pb-2">Трансляция: Текст, Видео, Галерея</p>
</div>
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">--}}
{{--        <a class="navbar-brand" href="#">Hidden brand</a>--}}
{{--        <ul class="navbar navbar-collapse  d-flex ul-for-menu mb-0 px-4 ">--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link text-dark text-menu pl-0" href="{{ route('need_to_know') }}" title="" style="">Надо знать</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('it_is_interesting') }}" title="" style="">Это интересно</a>--}}
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
{{--                <a class="nav-link text-dark text-menu" href="{{ route('media') }}" title="" style="">Медиа</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('news_page') }}" title="" style="">Новости</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-dark text-menu" href="{{ route('magazines') }}" title="" style="">Журнал</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <form class="form-inline my-2 my-lg-0">--}}
{{--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</nav>--}}

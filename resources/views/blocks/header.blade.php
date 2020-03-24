<div class="container-fluid">
    <div id="sb-search" class="sb-search col-6">
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <input class="sb-search-input" placeholder="Enter your search term..." type="text" name="desired" id="search" required>
            <input class="sb-search-submit" type="submit">
            <span class="sb-icon-search"></span>
        </form>
    </div>
    <div class="col-auto d-flex justify-content-end pt-2">
        <h5 class="mr-2 text-orange">RU</h5>
        <h5 class="text-orange">KG</h5>

    </div>

    <nav class="navbar navbar-expand-md navbar-light shadow-none pt-0 col-12">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<ul class="nav collapse navbar-collapse show mb-0 px-4 justify-content-center" id="navbarSupportedContent">
    <li class="nav-item ">
        <a class="nav-link text-dark text-menu pl-0" href="{{ route('need_to_know') }}" title="" style="">Надо знать</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('it_is_interesting') }}" title="" style="">Это
            интересно</a>
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
        <a class="nav-link text-dark text-menu" href="{{ route('all.media') }}" title="" style="">Медиа</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('all.news') }}" title="" style="">Новости</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark text-menu" href="{{ route('all.magazines') }}" title="" style="">Журнал</a>
    </li>
</ul>
<div class="text-center">
    <p class="bg-for-middle-div h4 pt-2 pb-2">Трансляция: Текст, Видео, Галерея</p>
</div>


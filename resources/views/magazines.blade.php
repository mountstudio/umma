@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ Breadcrumbs::render('magazines') }}

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div>
                    <h2 class="text-center">Журналы</h2>
                    <hr style="background-color: black;color: black;">
                    <div class="row text-center">
                        @foreach($magazines as $magazine)
                            <div class="col-12 col-md-6">
                                <div>
                                    <img class="img-fluid" src="{{ asset('storage/medium/' . $magazine->image) }}" alt="журнал 2017">
                                    <p class="m-0">{{ $magazine->name }}</p>
                                    <a href="{{ route('show.magazine', $magazine) }}">Просмотреть журнал в PDF</a>
                                    <a href="{{ asset('storage/pdf/' . $magazine->pdf) }}" download><p>Скачать журнал</p></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h3>О журнале</h3>
                    <hr style="background-color: black;color: black;">
                    <div class="row">
                        <div class="col-12 col-md-6  text-left">
                            <p>Главный редактор: Элиана-Марьям Сатарова</p>
                            <p>Литературный редактор: Ирина Верченко</p>
                            <p>Адабий редактор, корректор: Мирлан Токтобеков</p>
                            <p>Канонический редактор: д.п.н, доктор Кадыр ажы Маликов</p>
                            <p>Адрес редакции: г. Бишкек, ул. Ахунбаева, 134/309</p>
                            <a href="tel:+996 (709) 65-36-85"><p class="text-dark">Тел. редакции: +996 (709) 65-36-85,
                                    +996 (551) 040-264</p></a>
                            <a href="mailto:"><p class="text-dark">E-mail: ummamagkg@gmail.com</p></a>
                            <a href="http://ummamag.kg/"><p class="text-dark">Сайт: www.ummamag.kg</p></a>
                            <a href="https://www.facebook.com/ummamag.kg"><p class="text-dark">Страница на facebook:
                                    www.facebook.com/ummamag.kg</p></a>
                            <a href="https://www.instagram.com/ummamagkg/"><p class="text-dark">Страница на instagram:
                                    ummamagkg</p></a>
                            <p>Администратор сайта: Асан Талдыбаев</p>
                            <p>По вопросам размещения рекламы:
                                +996 (554) 50-50-95, +996 (778) 09-76-16, +996 (709) 16-01-15, +996 (709) 65-36-85,
                                +996 (551) 040-264</p>
                            <p>Менеджер по рекламе: Алтынбек Айтматов</p>
                        </div>
                        <div class="col-12 col-md-6 text-left">
                            <p>Ежеквартальный исламский журнал "Умма"</p>
                            <p>Издается с марта 2015 года</p>
                            <p>Журнал зарегистрирован в Министерстве Юстиции Кыргызской Республики</p>
                            <p>Свидетельство № 00429</p>
                            <p>Зарегистрирован в Духовном управлении мусульман КР №008 от 16.03.2014</p>
                            <p>Распространяется по территории Кыргызской Республики</p>
                            <p>Материалы, опубликованные в журнале и на сайте, являются интеллектуальной
                                собственностью журнала "Умма".</p>
                            <p>Любое воспроизведение материалов возможно только с письменного разрешения
                                редакции.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection

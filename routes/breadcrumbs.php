<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Главное', route('welcome'));
});
Breadcrumbs::register('articles', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Новости', route('all.news'));
});
Breadcrumbs::register('magazines', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Журналы', route('all.magazines'));
});
Breadcrumbs::register('multimedia', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Мультимедия', route('show_multimedia'));
});
Breadcrumbs::register('hadiths', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Хадисы', route('all.hadiths'));
});
Breadcrumbs::register('prayer_time', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Время намаза', route('prayer_time'));
});
Breadcrumbs::register('advertisers', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Рекламодателям', route('advertisers'));
});
Breadcrumbs::register('vacancies', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Вакансии', route('vacancies'));
});


Breadcrumbs::register('author', function ($breadcrumbs, $author) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($author->full_name, route('show.author', $author));
});

Breadcrumbs::register('article', function ($breadcrumbs, $article) {
    $breadcrumbs->parent('articles');
    $breadcrumbs->push($article->name, route('show.article', $article));
});

Breadcrumbs::register('hadith', function ($breadcrumbs, $hadith) {
    $breadcrumbs->parent('hadiths');
    $breadcrumbs->push($hadith->name, route('show.hadith', $hadith));
});

Breadcrumbs::register('tag', function ($breadcrumbs, $tag) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($tag->name, route('show.hadith', $tag));
});
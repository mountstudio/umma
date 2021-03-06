<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Support\Facades\App;

//Static register
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push(__('main.main_page'), route('welcome'));
});
Breadcrumbs::register('articles', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.news'), route('all.news'));
});
Breadcrumbs::register('magazines', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.journals'), route('all.magazines'));
});
Breadcrumbs::register('multimedia', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.multimedia'), route('all.media'));
});
Breadcrumbs::register('hadiths', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.hadiths'), route('all.hadiths'));
});
Breadcrumbs::register('prayer_time', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.prayer_time'), route('monthly.time.prayer'));
});
Breadcrumbs::register('advertisers', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.for_advertisers'), route('advertisers'));
});
Breadcrumbs::register('vacancies', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.vacancies'), route('vacancies'));
});
Breadcrumbs::register('interview', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.interview'), route('interview'));
});
Breadcrumbs::register('need_to_know', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.must_know'), route('need_to_know'));
});
Breadcrumbs::register('it_is_interesting', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.its_interesting'), route('it_is_interesting'));
});
Breadcrumbs::register('education', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.education'), route('education'));
});
Breadcrumbs::register('about_sore', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.sore'), route('about_sore'));
});
Breadcrumbs::register('authors', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.authors'), route('all.authors'));
});
Breadcrumbs::register('posters', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.posters'), route('all.posters'));
});
Breadcrumbs::register('questions', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(__('main.questions'), route('all.questions'));
});


Breadcrumbs::register('question', function ($breadcrumbs, $question) {
    $breadcrumbs->parent('questions');
    $breadcrumbs->push($question->name, route('show.question', $question));
});

Breadcrumbs::register('poster', function ($breadcrumbs, $poster) {
    $breadcrumbs->parent('posters');
    $breadcrumbs->push($poster->name, route('show.poster', $poster));
});

Breadcrumbs::register('media', function ($breadcrumbs, $media) {
    $breadcrumbs->parent('multimedia');
    $breadcrumbs->push($media->title, route('show.media', $media));
});
Breadcrumbs::register('magazine', function ($breadcrumbs, $magazine) {
    $breadcrumbs->parent('magazines');
    $breadcrumbs->push($magazine->name, route('show.magazine', $magazine));
});

Breadcrumbs::register('author', function ($breadcrumbs, $author) {
    $breadcrumbs->parent('authors');
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
    $breadcrumbs->push(App::isLocale('ru') ? $tag->name : $tag->name_kg, route('show.tag', $tag));
});

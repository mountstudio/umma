<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Category;
use Goutte\Client;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/magazines', function () {
    return view('magazines');
})->name('magazines');

Route::get('/it_is_interesting', function () {
    return view('it_is_interesting');
})->name('it_is_interesting');

Route::get('/need_to_know', function () {
    return view('need_to_know');
})->name('need_to_know');

Route::get('/need_to_know', function () {
    return view('need_to_know');
})->name('need_to_know');

Route::get('/interview', function () {
    return view('interview');
})->name('interview');

Route::get('/news_page', function () {
    return view('news_page');
})->name('news_page');

Route::get('/about_sore', function () {
    return view('about_sore');
})->name('about_sore');

Route::get('/education', function () {
    return view('education');
})->name('education');


Route::prefix('admin')->name('admin.')/*->middleware('admin')*/->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

//  CRUD for articles
    Route::get('/article', 'ArticleController@datatable')->name('article.datatable');
    Route::get('/article/datatable', 'ArticleController@datatableData')->name('article.datatable.data');
    Route::get('/article/{article}', 'ArticleController@adminShow')->name('article.show');
    Route::resource('articles', 'ArticleController')->except(['index', 'show']);
//Crud for authors
    Route::get('/author', 'AuthorController@datatable')->name('author.datatable');
    Route::get('/author/datatable', 'AuthorController@datatableData')->name('author.datatable.data');
    Route::get('/author/{author}', 'AuthorController@adminShow')->name('author.show');
    Route::resource('authors', 'AuthorController')->except(['index', 'show']);
//Crud for category
    Route::get('/category', 'CategoryController@datatable')->name('category.datatable');
    Route::get('/category/datatable', 'CategoryController@datatableData')->name('category.datatable.data');
    Route::get('/category/{category}', 'CategoryController@adminShow')->name('category.show');
    Route::resource('categories', 'CategoryController')->except(['index', 'show']);
//Crud for posters
    Route::get('/poster', 'PosterController@datatable')->name('poster.datatable');
    Route::get('/poster/datatable', 'PosterController@datatableData')->name('poster.datatable.data');
    Route::get('/poster/{category}', 'PosterController@adminShow')->name('poster.show');
    Route::resource('posters', 'PosterController')->except(['index', 'show']);
// Crud for hadisi
//    Route::get('/hadisi', 'HadisiController@datatable')->name('hadisi.datatable');
//    Route::get('/hadisi/hadisi', 'HadisiController@datatableData')->name('hadisi.datatable.data');
//    Route::get('/hadisi/{hadisi}', 'HadisiController@adminShow')->name('hadisi.show');
//    Route::resource('hadisi', 'HadisiController')->except(['index', 'show']);
// Crud for multimedia
    Route::get('/media', 'MultimediaController@datatable')->name('multimedia.datatable');
    Route::get('/media/datatable', 'MultimediaController@datatableData')->name('multimedia.datatable.data');
    Route::get('/media/{multimedia}', 'MultimediaController@adminShow')->name('multimedia.show');
    Route::resource('multimedia', 'MultimediaController')->except(['index', 'show']);
// Crud for magazines
//    Route::get('/magazine', 'MagazineController@datatable')->name('magazine.datatable');
//    Route::get('/magazine/datatable', 'MagazineController@datatableData')->name('magazine.datatable.data');
//    Route::get('/magazine/{magazines}', 'MagazineController@adminShow')->name('magazine.show');
//    Route::resource('magazines', 'MagazineController')->except(['index', 'show']);
// Crud for project
//    Route::get('/project', 'ProjectController@datatable')->name('project.datatable');
//    Route::get('/project/datatable', 'ProjectController@datatableData')->name('project.datatable.data');
//    Route::get('/project/{project}', 'ProjectController@adminShow')->name('project.show');
//    Route::resource('project', 'ProjectController')->except(['index', 'show']);
// Crud for photographer
    Route::get('/photographer', 'PhotographerController@datatable')->name('photographer.datatable');
    Route::get('/photographer/datatable', 'PhotographerController@datatableData')->name('photographer.datatable.data');
    Route::get('/photographer/{photograph}', 'PhotographerController@adminShow')->name('photographer.show');
    Route::resource('photographers', 'PhotographerController')->except(['index', 'show']);
// Crud for tags
    Route::get('/tag', 'TagController@datatable')->name('tag.datatable');
    Route::get('/tag/datatable', 'TagController@datatableData')->name('tag.datatable.data');
    Route::get('/tag/{tag}', 'TagController@adminShow')->name('tag.show');
    Route::resource('tags', 'TagController')->except(['index', 'show']);
//  CRUD for questions
    Route::get('/question', 'QuestionController@datatable')->name('question.datatable');
    Route::get('/question/datatable', 'QuestionController@datatableData')->name('question.datatable.data');
    Route::get('/question/{questions}', 'QuestionController@adminShow')->name('question.show');
    Route::resource('questions', 'QuestionController')->except(['index', 'show']);
//  CRUD for questionCategory
    Route::get('/questionCategory', 'QuestionCategoryController@datatable')->name('questionCategory.datatable');
    Route::get('/questionCategory/datatable', 'QuestionCategoryController@datatableData')->name('questionCategory.datatable.data');
    Route::get('/questionCategory/{questions}', 'QuestionCategoryController@adminShow')->name('questionCategory.show');
    Route::resource('questionCategories', 'QuestionCategoryController')->except(['index', 'show']);

});



//router for send subcategories
Route::get('/articles/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});

Route::get('/multimedia/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});

Route::get('/photograph/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});

Route::get('/tag/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});

Route::get('/project/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});

Route::get('/hadisi/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});

Route::get('/magazines/category/{id}', function ($id) {
    $subcategories = Category::where('parent_id', $id)->get();
    return json_encode($subcategories);
});
//router for send prayer time to today
Route::get('/time_prayer', 'TimePrayersController@prayerForToday')->name('time.prayer');

Route::get('/check_pars','TimePrayersController@prayerForMonthly');
Route::get('/scientists',function (){
    return view('scientists');
})->name('scientists');

Route::get('/show',function (){
    return view('show');
})->name('show');

Route::get('/prayer_time',function (){
    return view('prayer_time');
})->name('prayer_time');

Route::get('/hadis-dnya',function (){
    return view('hadisi.hadis-dnya');
})->name('hadisdnya');

Route::get('/hadis-show',function (){
    return view('hadisi.hadis-show');
})->name('hadis-show');

Route::get('/vacancies',function (){
    return view('vacancies');
})->name('vacancies');

Route::get('/advertisers',function (){
    return view('advertisers');
})->name('advertisers');

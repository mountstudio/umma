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

    Route::get('/article', 'ArticleController@datatable')->name('articles.datatable');
    Route::get('/article/datatable', 'ArticleController@datatableData')->name('articles.datatable.data');
    Route::get('/article/{article}', 'ArticleController@adminShow')->name('articles.show');
    Route::resource('articles', 'ArticleController')->except(['index', 'show']);
//Crud for authors
    Route::get('/author', 'AuthorController@datatable')->name('author.datatable');
    Route::get('/author/author', 'AuthorController@datatableData')->name('author.datatable.data');
    Route::get('/author/{author}', 'AuthorController@adminShow')->name('author.show');
    Route::resource('author', 'AuthorController')->except(['index', 'show']);
//Crud for category
    Route::get('/category', 'CategoryController@datatable')->name('category.datatable');
    Route::get('/category/category', 'CategoryController@datatableData')->name('category.datatable.data');
    Route::get('/category/{category}', 'CategoryController@adminShow')->name('category.show');
    Route::resource('category', 'CategoryController')->except(['index', 'show']);
// Crud for multimedia
    Route::get('/hadisi', 'HadisiController@datatable')->name('hadisi.datatable');
    Route::get('/hadisi/hadisi', 'HadisiController@datatableData')->name('hadisi.datatable.data');
    Route::get('/hadisi/{hadisi}', 'HadisiController@adminShow')->name('hadisi.show');
    Route::resource('hadisi', 'HadisiController')->except(['index', 'show']);
// Crud for multimedia
    Route::get('/multimedia', 'MultimediaController@datatable')->name('multimedia.datatable');
    Route::get('/multimedia/datatable', 'MultimediaController@datatableData')->name('multimedia.datatable.data');
    Route::get('/multimedia/{multimedia}', 'MultimediaController@adminShow')->name('multimedia.show');
    Route::resource('multimedia', 'MultimediaController')->except(['index', 'show']);
// Crud for magazines
    Route::get('/magazines', 'MagazinesController@datatable')->name('magazines.datatable');
    Route::get('/magazines/datatable', 'MagazinesController@datatableData')->name('magazines.datatable.data');
    Route::get('/magazines/{magazines}', 'MagazinesController@adminShow')->name('magazines.show');
    Route::resource('magazines', 'MagazinesController')->except(['index', 'show']);
// Crud for project
    Route::get('/project', 'ProjectController@datatable')->name('project.datatable');
    Route::get('/project/datatable', 'ProjectController@datatableData')->name('project.datatable.data');
    Route::get('/project/{project}', 'ProjectController@adminShow')->name('project.show');
    Route::resource('project', 'ProjectController')->except(['index', 'show']);
// Crud for photograph
    Route::get('/photograph', 'PhotographController@datatable')->name('photograph.datatable');
    Route::get('/photograph/datatable', 'PhotographController@datatableData')->name('photograph.datatable.data');
    Route::get('/photograph/{photograph}', 'PhotographController@adminShow')->name('photograph.show');
    Route::resource('photograph', 'PhotographController')->except(['index', 'show']);
// Crud for tags
    Route::get('/tags', 'TagsController@datatable')->name('tags.datatable');
    Route::get('/tags/datatable', 'TagsController@datatableData')->name('tags.datatable.data');
    Route::get('/tags/{tags}', 'TagsController@adminShow')->name('tags.show');
    Route::resource('tags', 'TagsController')->except(['index', 'show']);
//  CRUD for Authors

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

//router for send prayer time to today
Route::get('/time_prayer', 'TimePrayersController@prayerForToday');
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

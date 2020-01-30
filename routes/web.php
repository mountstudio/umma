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


Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
//  CRUD for articles

    Route::get('/article', 'ArticleController@datatable')->name('articles.datatable');
    Route::get('/article/datatable', 'ArticleController@datatableData')->name('articles.datatable.data');
    Route::get('/article/{article}', 'ArticleController@adminShow')->name('articles.show');
    Route::resource('articles', 'ArticleController')->except(['index', 'show']);
//  CRUD for Authors
    Route::resource('authors', 'AuthorController');
});



//router for send subcategories
Route::get('/articles/category/{id}', function ($id) {
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

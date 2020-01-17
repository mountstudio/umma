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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/welcome',function (){
    return view('welcome');
})->name('welcome');

Route::get('/media',function (){
    return view('media');
})->name('media');

Route::get('/magazines',function (){
    return view('magazines');
})->name('magazines');

Route::get('/it_is_interesting',function (){
    return view('it_is_interesting');
})->name('it_is_interesting');

Route::get('/need_to_know',function (){
    return view('need_to_know');
})->name('need_to_know');

Route::get('/need_to_know',function (){
    return view('need_to_know');
})->name('need_to_know');

Route::get('/interview',function (){
    return view('interview');
})->name('interview');

Route::get('/news_page',function (){
    return view('news_page');
})->name('news_page');

Route::get('/about_sore',function (){
    return view('about_sore');
})->name('about_sore');

Route::get('/education',function (){
    return view('education');
})->name('education');

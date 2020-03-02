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
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'ArticleController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/scientists',function (){
    return view('scientists');
})->name('scientists');

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

//ADMINKA
Route::prefix('admin')->name('admin.')/*->middleware('admin')*/->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');


//CRUD for articles
    Route::get('/article', 'ArticleController@datatable')->name('article.datatable');
    Route::get('/article/datatable', 'ArticleController@datatableData')->name('article.datatable.data');
    Route::get('/article/{article}', 'ArticleController@adminShow')->name('article.show');
    Route::resource('articles', 'ArticleController')->except(['index', 'show']);
//CRUD for longreads
    Route::get('/longread', 'ArticleController@datatable')->name('longread.datatable');
    Route::get('/longread/datatable', 'ArticleController@datatableData')->name('longread.datatable.data');
    Route::get('/longread/{article}', 'ArticleController@adminShow')->name('longread.show');
    Route::resource('longreads','ArticleController')->except(['index', 'show'])->parameters([
        'longreads' => 'article'
    ]);
//CRUD for digest
    Route::get('/digest', 'ArticleController@datatable')->name('digest.datatable');
    Route::get('/digest/datatable', 'ArticleController@datatableData')->name('digest.datatable.data');
    Route::get('/digest/{article}', 'ArticleController@adminShow')->name('digest.show');
    Route::resource('digests', 'ArticleController')->except(['index', 'show'])->parameters([
        'digests' => 'article'
    ]);
//CRUD for authors
    Route::get('/author', 'AuthorController@datatable')->name('author.datatable');
    Route::get('/author/datatable', 'AuthorController@datatableData')->name('author.datatable.data');
    Route::get('/author/{author}', 'AuthorController@adminShow')->name('author.show');
    Route::resource('authors', 'AuthorController')->except(['index', 'show']);
//CRUD for categories
    Route::get('/category', 'CategoryController@datatable')->name('category.datatable');
    Route::get('/category/datatable', 'CategoryController@datatableData')->name('category.datatable.data');
    Route::get('/category/{category}', 'CategoryController@adminShow')->name('category.show');
    Route::resource('categories', 'CategoryController')->except(['index', 'show']);
//CRUD for posters
    Route::get('/poster', 'PosterController@datatable')->name('poster.datatable');
    Route::get('/poster/datatable', 'PosterController@datatableData')->name('poster.datatable.data');
    Route::get('/poster/{poster}', 'PosterController@adminShow')->name('poster.show');
    Route::resource('posters', 'PosterController')->except(['index', 'show']);
//CRUD for hadith
    Route::get('/hadith', 'HadithController@datatable')->name('hadith.datatable');
    Route::get('/hadith/datatable', 'HadithController@datatableData')->name('hadith.datatable.data');
    Route::get('/hadith/{hadith}', 'HadithController@adminShow')->name('hadith.show');
    Route::resource('hadiths', 'HadithController')->except(['index', 'show']);
//CRUD for multimedia
    Route::get('/media', 'MultimediaController@datatable')->name('multimedia.datatable');
    Route::get('/media/datatable', 'MultimediaController@datatableData')->name('multimedia.datatable.data');
    Route::get('/media/{multimedia}', 'MultimediaController@adminShow')->name('multimedia.show');
    Route::resource('multimedia', 'MultimediaController')->except(['index', 'show']);
//CRUD for magazines
    Route::get('/magazine', 'MagazineController@datatable')->name('magazine.datatable');
    Route::get('/magazine/datatable', 'MagazineController@datatableData')->name('magazine.datatable.data');
    Route::get('/magazine/{magazine}', 'MagazineController@adminShow')->name('magazine.show');
    Route::resource('magazines', 'MagazineController')->except(['index', 'show']);
//CRUD for projects
    Route::get('/project', 'ProjectController@datatable')->name('project.datatable');
    Route::get('/project/datatable', 'ProjectController@datatableData')->name('project.datatable.data');
    Route::get('/project/{project}', 'ProjectController@adminShow')->name('project.show');
    Route::resource('projects', 'ProjectController')->except(['index', 'show']);
//CRUD for photographers
    Route::get('/photographer', 'PhotographerController@datatable')->name('photographer.datatable');
    Route::get('/photographer/datatable', 'PhotographerController@datatableData')->name('photographer.datatable.data');
    Route::get('/photographer/{photographer}', 'PhotographerController@adminShow')->name('photographer.show');
    Route::resource('photographers', 'PhotographerController')->except(['index', 'show']);
//CRUD for tags
    Route::get('/tag', 'TagController@datatable')->name('tag.datatable');
    Route::get('/tag/datatable', 'TagController@datatableData')->name('tag.datatable.data');
    Route::get('/tag/{tag}', 'TagController@adminShow')->name('tag.show');
    Route::resource('tags', 'TagController')->except(['index', 'show']);
//CRUD for questions
    Route::get('/question', 'QuestionController@datatable')->name('question.datatable');
    Route::get('/question/datatable', 'QuestionController@datatableData')->name('question.datatable.data');
    Route::get('/question/{question}', 'QuestionController@adminShow')->name('question.show');
    Route::resource('questions', 'QuestionController')->except(['index', 'show']);
//CRUD for questionCategory
    Route::get('/questionCategory', 'QuestionCategoryController@datatable')->name('questionCategory.datatable');
    Route::get('/questionCategory/datatable', 'QuestionCategoryController@datatableData')->name('questionCategory.datatable.data');
    Route::get('/questionCategory/{questionCategory}', 'QuestionCategoryController@adminShow')->name('questionCategory.show');
    Route::resource('questionCategories', 'QuestionCategoryController')->except(['index', 'show']);
//CRUD for posterTypes
    Route::get('/posterType', 'PosterTypeController@datatable')->name('posterType.datatable');
    Route::get('/posterType/datatable', 'PosterTypeController@datatableData')->name('posterType.datatable.data');
    Route::get('/posterType/{posterType}', 'PosterTypeController@adminShow')->name('posterType.show');
    Route::resource('posterTypes', 'PosterTypeController')->except(['index', 'show']);
//CRUD for comments
    Route::get('/comment', 'CommentController@datatable')->name('comment.datatable');
    Route::get('/comment/datatable', 'CommentController@datatableData')->name('comment.datatable.data');
    Route::get('/comment/{comment}', 'CommentController@adminShow')->name('comment.show');
    Route::resource('comments', 'CommentController')->except(['index', 'show']);
});



//router for send prayer time to today
Route::get('/time_prayer', 'TimePrayersController@prayerForToday')->name('time.prayer');

Route::get('/check_pars','TimePrayersController@prayerForMonthly');


<?php
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::feeds();

Route::get('/', 'ArticleController@welcome')->name('welcome');

Route::get('/it_is_interesting', 'ArticleController@it_is_interesting')->name('it_is_interesting');

Route::get('/need_to_know', 'ArticleController@need_to_know')->name('need_to_know');

Route::get('/interview', 'ArticleController@interview')->name('interview');

Route::get('/about_sore', 'ArticleController@about_sore')->name('about_sore');

Route::get('/education', 'ArticleController@education')->name('education');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/set-language/{lang}', 'LanguageController@switch')->name('language.switch');


Route::get('/show_hadith/{hadith}', 'HadithController@show')->name('show.hadith');

Route::get('/show_for_news/{article}', 'ArticleController@show')->name('show.article');

Route::get('/show_for_authors/{author}', 'AuthorController@show')->name('show.author');

Route::get('/show_for_tags/{tag}', 'TagController@show')->name('show.tag');

Route::get('/show_media/{multimedia}', 'MultimediaController@show')->name('show.media');

Route::get('/show_magazines/{magazine}', 'MagazineController@show')->name('show.magazine');

Route::get('/show_poster/{poster}', 'PosterController@show')->name('show.poster');

Route::get('/show_question/{question}', 'QuestionController@show')->name('show.question');



Route::get('/hadiths', 'HadithController@showHadiths')->name('all.hadiths');

Route::get('/news_page', 'ArticleController@showNews')->name('all.news');

Route::get('/magazines', 'MagazineController@showMagazines')->name('all.magazines');

Route::get('/multimedia', 'MultimediaController@showMultimedia')->name('all.media');

Route::get('/authors', 'AuthorController@showAuthors')->name('all.authors');

Route::get('/posters', 'PosterController@index')->name('all.posters');

Route::get('/questions', 'QuestionController@scientists')->name('all.questions');






//OTHER
Route::post('/create_subscriber', 'SubscriberController@userStore')->name('user.subscriber.store');

Route::post('/create_question', 'QuestionController@userStore')->name('user.question.store');

Route::post('/create_comment', 'CommentController@userStore')->name('user.comment.store');


Route::get('/search_results', 'ArticleController@searchArticles')->name('search');

Route::get('/prayer_time_for_monthly', 'TimePrayersController@prayerForMonthly')->name('monthly.time.prayer');


//AJAX
Route::post('/image-upload', 'ContentController@upload')->name('content.upload');

Route::get('/time_prayer', 'TimePrayersController@prayerForToday')->name('time.prayer');

Route::get('chart_count_registered', 'ChartController@registeredUsers')->name('chart.count.registered');

Route::get('chart_count_views', 'ChartController@articleTypeViews')->name('chart.count.views');



Route::get('/vacancies', function () {
    return view('vacancies');
})->name('vacancies');

Route::get('/advertisers', function () {
    return view('advertisers');
})->name('advertisers');

//ADMINKA
Route::prefix('admin')->name('admin.')/*->middleware('admin')*/
->group(function () {
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
    Route::resource('longreads', 'ArticleController')->except(['index', 'show'])->parameters([
        'longreads' => 'article'
    ]);
//CRUD for digest
    Route::get('/digest', 'ArticleController@datatable')->name('digest.datatable');
    Route::get('/digest/datatable', 'ArticleController@datatableData')->name('digest.datatable.data');
    Route::get('/digest/{article}', 'ArticleController@adminShow')->name('digest.show');
    Route::resource('digests', 'ArticleController')->except(['index', 'show'])->parameters([
        'digests' => 'article'
    ]);
    //CRUD for digest
    Route::get('/new', 'ArticleController@datatable')->name('new.datatable');
    Route::get('/new/datatable', 'ArticleController@datatableData')->name('new.datatable.data');
    Route::get('/new/{article}', 'ArticleController@adminShow')->name('new.show');
    Route::resource('news', 'ArticleController')->except(['index', 'show'])->parameters([
        'news' => 'article'
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

    //CRUD for comments
    Route::get('/subscriber', 'SubscriberController@datatable')->name('subscriber.datatable');
    Route::get('/subscriber/datatable', 'SubscriberController@datatableData')->name('subscriber.datatable.data');
    Route::get('/subscriber/{subscriber}', 'SubscriberController@adminShow')->name('subscriber.show');
    Route::resource('subscribers', 'SubscriberController')->except(['index', 'show']);

    //CRUD for banners
    Route::get('/banner', 'BannerController@datatable')->name('banner.datatable');
    Route::get('/banner/datatable', 'BannerController@datatableData')->name('banner.datatable.data');
    Route::get('/banner/{banner}', 'BannerController@adminShow')->name('banner.show');
    Route::resource('banners', 'BannerController')->except(['index', 'show']);

    Route::get('/siteText', 'SiteTextController@datatable')->name('siteText.datatable');
    Route::get('/siteText/datatable', 'SiteTextController@datatableData')->name('siteText.datatable.data');
    Route::resource('siteTexts', 'SiteTextController')->except(['index', 'show', 'delete', 'create']);
});


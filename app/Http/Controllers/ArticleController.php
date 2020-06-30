<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Category;
use App\Hadith;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Magazine;
use App\Multimedia;
use App\Photographer;
use App\Poster;
use App\Project;
use App\Services\ContentCutting;
use App\Services\ImageUploader;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (request()->route()->named('admin.articles.create')) {
            $type = 'article';
        } else if (request()->route()->named('admin.longreads.create')) {
            $type = 'longread';
        } else if (request()->route()->named('admin.digest.create')) {
            $type = 'digest';
        } else {
            $type = 'new';
        }
        return view('admin.articles.create',
            [
                'categories' => Category::all(),
                'authors' => Author::all(),
                'photographers' => Photographer::all(),
                'tags' => Tag::all(),
                'type' => $type,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreArticleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $request->validated();
        $article = Article::create($request->except(['is_active', 'view_main']));
        $article->is_active = $request->exists('is_active');
        $article->view_main = $request->exists('view_main');

        $article->logo = ImageUploader::upload(request('logo'), 'articles', 'articles', 40);
        if ($request->hasFile('banner')) {
            $article->banner = ImageUploader::upload(request('banner'), 'banner', 'banner', 40);
        }
        if ($request->hasFile('og_image')) {
            $article->og_image = ImageUploader::upload(request('og_image'), 'og', 'og', 40);
        }
        $article->authors()->attach($request->authors);
        $article->photographers()->attach($request->photographers);
        $article->tags()->attach($request->tags);
        $article->save();

//        $article->content = ContentCutting::cut_contents($article->content, 15, 65);
//        MailSender::send($article);
        return redirect()->route('admin.' . $request->type . '.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        if (!Article::getArticleViews($article->id)) {
            $article->impressions++;
            $article->save();
        }
        $comments = $article->comments()->get();
        $otherArticles = Article::where('category_id', $article->category_id)->where('id', '!=', $article->id)->take(6)->get();
        $otherArticles = $otherArticles->chunk(ceil(3));
        return view('articles.show', [
            'article' => $article,
            'comments' => $comments,
            'otherArticles' => $otherArticles,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function adminShow(Article $article)
    {
        return view('admin.articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit',
            [
                'article' => $article,
                'categories' => Category::all(),
                'authors' => Author::all(),
                'photographers' => Photographer::all(),
                'tags' => Tag::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateArticleRequest $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $request->validated();
        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete("/large/" . $article->logo);
            Storage::disk('public')->delete("/medium/" . $article->logo);
            Storage::disk('public')->delete("/small/" . $article->logo);
        $article->logo = ImageUploader::upload(request('logo'), 'articles', 'articles', 90);
        }
        if ($request->hasFile('banner')) {
            Storage::disk('public')->delete("/large/" . $article->banner);
            Storage::disk('public')->delete("/medium/" . $article->banner);
            Storage::disk('public')->delete("/small/" . $article->banner);
            $article->banner = ImageUploader::upload(request('banner'), 'banner', 'banner', 90);
        }
        if ($request->hasFile('og_image')) {
            Storage::disk('public')->delete("/large/" . $article->og_image);
            Storage::disk('public')->delete("/medium/" . $article->og_image);
            Storage::disk('public')->delete("/small/" . $article->og_image);
            $article->og_image = ImageUploader::upload(request('og_image'), 'og_image', 'og_image', 90);
        }


        $article->update($request->except(['is_active', 'view_main', 'logo', 'og_image', 'banner']));
        $article->is_active = $request->exists('is_active');
        $article->view_main = $request->exists('view_main');
        $article->save();
        $article->authors()->sync($request->authors);
        $article->photographers()->sync($request->photographers);
        $article->tags()->sync($request->tags);
        return redirect()->route('admin.' . $article->type . '.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $type = $article->type;
        $article->delete();
        return redirect()->route('admin.' . $type . '.datatable');
    }

    public function datatableData()
    {
        if (request()->route()->named('admin.article.datatable.data')) {
            $type = 'article';
        } else if (request()->route()->named('admin.longread.datatable.data')) {
            $type = 'longread';
        } else if (request()->route()->named('admin.digest.datatable.data')) {
            $type = 'digest';
        } else {
            $type = 'new';
        }
        return DataTables::of(Article::where('type', $type))
            ->editColumn('name', function (Article $article) use ($type) {

                return '<a href="' . route('admin.' . $type . '.show', $article) . '">' . $article->name . '</a>';
            })
            ->editColumn('view_main', function (Article $article) {
                if ($article->view_main) {
                    return '<i class="fas fa-check fa-lg"></i>';
                } else {
                    return '<i class="fas fa-ban fa-lg"></i>';
                }
            })
            ->editColumn('logo', function (Article $article) {
                if (!is_null($article->view_main)) {
                    return '<img src="' . asset('/storage/small/' . $article->logo) . '">';
                }
            })
            ->editColumn('is_active', function (Article $article) {
                if ($article->is_active) {
                    return '<i class="fas fa-check fa-lg"></i>';
                } else {
                    return '<i class="fas fa-ban fa-lg"></i>';
                }
            })
            ->editColumn('category_id', function (Article $article) {

                if (!is_null($article->category)) {
                    return $article->category->name;
                } else {
                    return null;
                }
            })
            ->addColumn('actions', function (Article $article) use ($type) {
                return view('admin.actions', [
                    'type' => $type . 's',
                    'model' => $article
                ]);
            })
            ->rawColumns(['name', 'view_main', 'is_active', 'logo'])
            ->make(true);
    }

    public function datatable()
    {
        if (request()->route()->named('admin.article.datatable')) {
            return view('admin.articles.index', ['type' => 'article']);
        } else if (request()->route()->named('admin.longread.datatable')) {
            return view('admin.articles.index', ['type' => 'longread']);
        } else if (request()->route()->named('admin.digest.datatable')) {
            return view('admin.articles.index', ['type' => 'digest']);
        } else {
            return view('admin.articles.index', ['type' => 'new']);
        }
    }

    public function welcome()
    {
        if (App::isLocale('ru')) {
            $articlesDayTheme = Article::where('lang', 'ru')->where('view_main', true)->latest()->take(6)->get();
            $articlesCommentLatest = Article::where('lang', 'ru')->has('comments')->orderBy('updated_at', 'DESC')->take(6)->get();
            $articlesLatest = Article::where('lang', 'ru')->latest()->take(6)->get();
            $hadith = Hadith::where('lang', 'ru')->latest()->first();
            $multimedia = Multimedia::where('lang', 'ru')->latest()->take(10)->get();
            $posters = Poster::where('lang', 'ru')->where('date_event', '>', now())->get()->sortBy('date_event');
        } else {
            $articlesDayTheme = Article::where('lang', 'kg')->where('view_main', true)->latest()->take(6)->get();
            $articlesCommentLatest = Article::where('lang', 'kg')->has('comments')->orderBy('updated_at', 'DESC')->take(6)->get();
            $articlesLatest = Article::where('lang', 'kg')->latest()->take(6)->get();
            $hadith = Hadith::where('lang', 'kg')->latest()->first();
            $multimedia = Multimedia::where('lang', 'kg')->latest()->take(10)->get();
            $posters = Poster::where('lang', 'kg')->where('date_event', '>', now())->get()->sortBy('date_event');
        }
        $kolumnisty = Author::all()->where('view_main', true)->shuffle()->take(4);
        $magazines = Magazine::latest()->take(2)->get();
        $projects = Project::latest()->get();
        $categories = self::get_categories();
        $articlesCategories = $categories->map(function ($item) {
            return $item->articles->where('lang', App::isLocale('') ? 'ru':'kg')->take(3);
        })->flatten();
        if ($hadith) {
            $hadith->content = ContentCutting::cut_contents($hadith->content, 60, 370);
        }
        foreach ($posters as $poster) {
            $content = strip_tags($poster->content);
            $poster->content = ContentCutting::cut_contents($content, 10, 42);
        }

        return view('welcome', [
            'posters' => $posters,
            'multimedia' => $multimedia,
            'hadith' => $hadith,
            'projects' => $projects,
            'magazines' => $magazines,
            'articlesLatest' => $articlesLatest,
            'articlesCommentLatest' => $articlesCommentLatest,
            'articlesDayTheme' => $articlesDayTheme,
            'kolumnisty' => $kolumnisty,
            'articlesByCategory' => $articlesCategories,
        ]);
    }

    public function showNews()
    {
        if (App::isLocale('ru')) {
            $articles = Article::where('lang', 'ru')->paginate(6);
        } else {
            $articles = Article::where('lang', 'kg')->paginate(6);
        }

        return view('articles.index', ['articles' => $articles]);
    }

    public function about_sore()
    {
        if (App::isLocale('ru')) {
            $articles = Article::where('category_id', 1)->where('lang', 'ru')->paginate(6);
        } else {
            $articles = Article::where('category_id', 1)->where('lang', 'kg')->paginate(6);
        }
        return view('about_sore', ['articles' => $articles]);
    }

    public function need_to_know()
    {
        if (App::isLocale('ru')) {
            $articles = Article::where('category_id', 2)->where('lang', 'ru')->paginate(6);
        } else {
            $articles = Article::where('category_id', 2)->where('lang', 'kg')->paginate(6);
        }
        return view('need_to_know', ['articles' => $articles]);
    }

    public function it_is_interesting()
    {
        if (App::isLocale('ru')) {
            $articles = Article::where('category_id', 3)->where('lang', 'ru')->paginate(6);
        } else {
            $articles = Article::where('category_id', 3)->where('lang', 'kg')->paginate(6);
        }
        return view('it_is_interesting', ['articles' => $articles]);
    }

    public function education()
    {
        if (App::isLocale('ru')) {
            $articles = Article::where('category_id', 4)->where('lang', 'ru')->paginate(6);
        } else {
            $articles = Article::where('category_id', 4)->where('lang', 'kg')->paginate(6);
        }
        return view('education', ['articles' => $articles]);
    }

    public function interview()
    {
        if (App::isLocale('ru')) {
            $articles = Article::where('category_id', 5)->where('lang', 'ru')->paginate(6);
        } else {
            $articles = Article::where('category_id', 5)->where('lang', 'kg')->paginate(6);
        }
        return view('interview', ['articles' => $articles]);
    }


    public function searchArticles(Request $request)
    {
        $searchResults = Article::where('name', 'like', '%' . $request->search . '%')->get();
        $articles = array();

        foreach ($searchResults as $result) {
            array_push($articles, $result);
        }
        $articles = collect($articles)->groupBy('type');
        return view('search.search_results', ['searchResults' => $articles]);
    }

    public static function get_categories()
    {
        $categories = Category::has('articles', '>', 1)->inRandomOrder()->take(3)->get();
        switch ($categories->count()) {
            case 0:
                $countNeed = 3;
                break;
            case 1:
                $countNeed = 2;
                break;
            case 2:
                $countNeed = 1;
                break;
            default:
                $countNeed = 0;
        }
        $categories = $categories->merge(Category::has('articles', '=', 1)->inRandomOrder()->take($countNeed)->get());
        return $categories;
    }

}

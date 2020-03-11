<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Category;
use App\hadith;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Magazine;
use App\Multimedia;
use App\Photographer;
use App\Poster;
use App\Project;
use App\Services\ImageUploader;
use App\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
        } else {
            $type = 'digest';
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
        $article = Article::create($request->except(['is_active', 'view_main']));
        $article->is_active = $request->exists('is_active');
        $article->view_main = $request->exists('view_main');

        $article->logo = ImageUploader::upload(request('logo'), 'articles', 'articles', 40);
        $article->save();
        $article->authors()->attach($request->authors);
        $article->photographers()->attach($request->photographers);
        $article->tags()->attach($request->tags);
        return redirect()->route('admin.' . $request->type . '.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function adminShow(Article $article)
    {
        return view('admin.articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article $article
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
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete("/large/" . $article->logo);
            Storage::disk('public')->delete("/medium/" . $article->logo);
            Storage::disk('public')->delete("/small/" . $article->logo);
            $article->logo = ImageUploader::upload(request('logo'), 'articles', 'articles', 40);
        }
        $article->update($request->except(['is_active', 'view_main', 'logo']));
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
     * @param  \App\Article $article
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
        } else {
            $type = 'digest';
        }
        return DataTables::of(Article::where('type', $type))
            ->editColumn('name', function (Article $article) use ($type) {
                return '<a href="' . route('admin.' . $type . '.show', $article) . '">' . $article->name . '</a>';
            })
            ->addColumn('actions', function (Article $article) use ($type) {
                return view('admin.actions', [
                    'type' => $type . 's',
                    'model' => $article
                ]);
            })
            ->rawColumns(['name'])
            ->make(true);
    }

    public function datatable()
    {
        if (request()->route()->named('admin.article.datatable')) {
            return view('admin.articles.index', ['type' => 'article']);
        } else if (request()->route()->named('admin.longread.datatable')) {
            return view('admin.articles.index', ['type' => 'longread']);
        } else {
            return view('admin.articles.index', ['type' => 'digest']);
        }
    }

    public function welcome()
    {
        $articlesDayTheme = Article::where('view_main', true)->latest()->get();
        $articlesCommentLatest = Article::orderBy('updated_at', 'DESC')->take(6)->get();
        $articlesLatest = Article::latest()->take(6)->get();
        $categories = self::get_categories();

        $kolumnisty = Author::where('view_main', true)->latest()->get();
        $hadith = Hadith::latest()->first();
        $multimedia = Multimedia::latest()->take(10)->get();
        $projects = Project::All();
        $magazines = Magazine::latest()->take(2)->get();
        $posters = Poster::latest()->take(6)->get();

        $hadith->content = self::cut_contents(strip_tags($hadith->content), 60, 370);
        foreach ($posters as $poster) {
            $content = strip_tags($poster->content);
            $poster->content = self::cut_contents($content, 10, 42);
        }

        return view('welcome',
            [
                'posters' => $posters,
                'multimedia' => $multimedia,
                'hadith' => $hadith,
                'projects' => $projects,
                'magazines' => $magazines,
                'articlesLatest' => $articlesLatest,
                'articlesCommentLatest' => $articlesCommentLatest,
                'articlesDayTheme' => $articlesDayTheme,
                'kolumnisty' => $kolumnisty,
                'articlesByCategory' => $categories,
            ]);
    }

    public function news_page()
    {
        $articles = Article::all()->paginate(6);
        return view('news_page', ['articles' => $articles]);
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
        }
        $categories = $categories->merge(Category::has('articles', '=', 1)->inRandomOrder()->take($countNeed)->get());
        return $categories;
    }

    public static function cut_contents($content, $countWords, $countSymbols)
    {
        if (iconv_strlen($content) < $countSymbols - 3) {
            return $content;
        } else {
            return self::recursive_cut_content($content, $countWords, $countSymbols);
        }
    }

    public static function recursive_cut_content($content, $countWords, $countSymbols)
    {
        $content = Str::words($content, $countWords, '');

        if (iconv_strlen($content) < $countSymbols - 3) {
            $strWithoutLastSymbol = preg_replace('/(!|,|\.|\'|\"|\:|\.{2}|\.{3}|\;)$/', '', $content);
            return $strWithoutLastSymbol . '...';
        } else {
            return self::recursive_cut_content($content, --$countWords, $countSymbols);
        }
    }
}

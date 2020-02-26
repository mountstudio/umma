<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Photographer;
use App\Services\ImageUploader;
use App\Tag;
use Illuminate\Http\Request;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {

        $article = Article::create($request->except(['is_active', 'view_main']));
        $article->is_active = $request->exists('is_active');
        $article->view_main = $request->exists('view_main');

        $article->logo = ImageUploader::upload(request('logo'), 'articles', 'articles', 40);
//        $article->category_id = $request->category_id != '0' ? $request->category_id : null;
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
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        if (!$request->hasFile('logo')) {
            $article->update($request->except(['is_active', 'view_main'])); //Обновляем все кроме is_active, view_main
            $article->is_active = $request->exists('is_active'); // Записываем is_active
            $article->view_main = $request->exists('view_main'); // Записываем view_main
            $article->save();
            $article->authors()->sync($request->authors);
            $article->photographers()->sync($request->photographers);
            $article->tags()->sync($request->tags);
        } else {
            Storage::disk('public')->delete("/large/" . $article->logo);
            Storage::disk('public')->delete("/medium/" . $article->logo);
            Storage::disk('public')->delete("/small/" . $article->logo);
            $article->update($request->except(['is_active', 'view_main']));
            $article->is_active = $request->exists('is_active');
            $article->view_main = $request->exists('view_main');
            $article->logo = ImageUploader::upload(request('logo'), 'articles', 'articles', 40);
            $article->save();
            $article->authors()->sync($request->authors);
            $article->photographers()->sync($request->photographers);
            $article->tags()->sync($request->tags);
        }
        return redirect()->route('admin.'.$article->type.'.datatable');
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
            ->editColumn('name', function (Article $article) use ($type){
                return '<a href="' . route('admin.'.$type.'.show', $article) . '">' . $article->name . '</a>';
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
}

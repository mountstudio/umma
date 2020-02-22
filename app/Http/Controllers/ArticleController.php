<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Category;
use App\Photographer;
use App\Tag;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        dd($request);
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
      return view('admin.articles.edit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.article.datatable');
    }

    public function datatableData()
    {
        if (request()->route()->getName() == 'admin.article.datatable.data') {
            $type = 'article';
        } else if (request()->route()->getName() == 'admin.longread.datatable.data'){
            $type = 'longread';
        } else {
            $type = 'digest';
        }
            return DataTables::of(Article::where('type', $type))
                ->editColumn('name', function (Article $article) {
                    return '<a href="' . route('admin.article.show', $article) . '">' . $article->name . '</a>';
                })
                ->addColumn('actions', function (Article $article) {
                    return view('admin.actions', [
                        'type' => 'articles',
                        'model' => $article
                    ]);
                })
                ->rawColumns(['name'])
                ->make(true);
    }

    public function datatable()
    {
        if (request()->route()->getName() == "admin.article.datatable") {
            return view('admin.articles.index', ['type' => 'article']);
        } else if (request()->route()->getName() == 'admin.longread.datatable') {
            return view('admin.articles.index', ['type' => 'longread']);
        } else {
            return view('admin.articles.index', ['type' => 'digest']);
        }
    }
}

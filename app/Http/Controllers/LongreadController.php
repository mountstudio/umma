<?php


namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;

class LongreadController extends Controller
{
/**
 * Display a listing of the resource
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Article $longread
     * @return void
     */
    public function show(Article $longread)
    {
        //
    }

    public function adminShow(Article $longread)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $longread)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHadithRequest $request, Article $longread)
    {

        $request->validated();
        $longread->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $longread)
    {
        $longread->delete();
        return redirect()->route('admin.hadith.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Article::query())
            ->editColumn('name', function (Article $article) {
                return '<a href="' . route('admin.articles.show', $article) . '">' . $article->name . '</a>';
            })
            ->addColumn('actions', function (Article $article) {
                return view('admin.actions', ['type' => 'articles', 'model' => $article]);
            })
            ->rawColumns(['name'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.hadiths.index');
    }

}
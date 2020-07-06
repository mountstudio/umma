<?php

namespace App\Http\Controllers;

use App\Hadith;
use App\Http\Requests\StoreHadithRequest;
use App\Http\Requests\UpdateHadithRequest;
use App\Services\ContentCutting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class HadithController extends Controller
{
    /**
     * Display a listing of the resource.
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
        return view('admin.hadiths.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHadithRequest $request)
    {
        $request->validated();
        Hadith::create($request->all());
        return redirect()->route('admin.hadith.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function show(Hadith $hadith)
    {
        return view('hadiths.show_for_hadith', ['hadith' => $hadith]);
    }

    public function adminShow(Hadith $hadith)
    {
        return view('admin.hadiths.show', ['hadith' => $hadith]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function edit(Hadith $hadith)
    {
        return view('admin.hadiths.edit', ['hadith' => $hadith]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHadithRequest $request, Hadith $hadith)
    {

        $request->validated();
        $hadith->update($request->all());
        return redirect()->route('admin.hadith.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hadith $hadith
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hadith $hadith)
    {
        $hadith->delete();
        return redirect()->route('admin.hadith.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Hadith::query())
            ->editColumn('name', function (Hadith $hadith) {
                return '<a href="' . route('admin.hadith.show', $hadith) . '">' . $hadith->name . '</a>';
            })
            ->addColumn('actions', function (Hadith $hadith) {
                return view('admin.actions', ['type' => 'hadiths', 'model' => $hadith]);
            })
            ->rawColumns(['name'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.hadiths.index');
    }

    public function showHadiths()
    {
        $hadiths = Hadith::where('lang', App::isLocale('ru') ? 'ru':'kg')->paginate(6);
        foreach ($hadiths as $hadith) {
            $hadith->content = strip_tags($hadith->content);
            $hadith->content = ContentCutting::cut_contents($hadith->content, 20, 103);
        }
        return view('hadiths.all_hadith_show', ['hadiths' => $hadiths]);
    }
}

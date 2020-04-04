<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMagazineRequest;
use App\Http\Requests\UpdateMagazineRequest;
use App\Magazine;
use App\Services\ImageUploader;
use App\Services\PdfUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MagazineController extends Controller
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
        return view('admin.magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMagazineRequest $request)
    {
        $request->validated();
        $magazine = Magazine::create($request->all());
        $magazine->image = ImageUploader::upload(request('image'), 'magazines', 'magazines', 40);
        $magazine->pdf = PdfUploader::upload(request('pdf'), 'magazines', 'magazines');
        $magazine->save();
        return redirect()->route('admin.magazine.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function show(Magazine $magazine)
    {
//        dd($magazine);
        return view('magazines.show_magazines', ['magazine' => $magazine]);
    }

    public function adminShow(Magazine $magazine)
    {

        return view('admin.magazines.show', ['magazine' => $magazine]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazine $magazine)
    {
        return view('admin.magazines.edit', ['magazine' => $magazine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMagazineRequest $request, Magazine $magazine)
    {
        $request->validated();
        if($request->hasFile('image')){
            Storage::disk('public')->delete("/large/" . $magazine->image);
            Storage::disk('public')->delete("/medium/" . $magazine->image);
            Storage::disk('public')->delete("/small/" . $magazine->image);
            $magazine->image = ImageUploader::upload(request('image'), 'authors', 'authors', 40);
        }
        if ($request->hasFile('pdf')){
            Storage::disk('public')->delete("/pdf/" . $magazine->pdf);
            $magazine->pdf = PdfUploader::upload(request('pdf'), 'magazines', 'magazines');
        }
        $magazine->save();
        $magazine->update($request->except('image','pdf'));
        return redirect()->route('admin.magazine.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
        $magazine->delete();
        return redirect()->route('admin.magazine.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Magazine::query())
            ->editColumn('name', function (Magazine $magazine) {
                return '<a href="' . route('admin.magazine.show', $magazine) . '">' . $magazine->name . '</a>';
            })
            ->editColumn('image', function (Magazine $magazine) {
                return '<img src="' . asset('/storage/small/' . $magazine->image) . '" height="100">';
            })
            ->addColumn('actions', function (Magazine $magazine) {
                return view('admin.actions', ['type' => 'magazines', 'model' => $magazine]);
            })
            ->rawColumns(['name', 'image'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.magazines.index');
    }

    public function showMagazines()
    {
        return view('magazines', ['magazines' => Magazine::latest()->get()]);
    }
}

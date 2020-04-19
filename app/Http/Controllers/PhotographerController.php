<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotographerRequest;
use App\Http\Requests\UpdatePhotographerRequest;
use App\Photographer;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Services\ImageUploader;

class PhotographerController extends Controller
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
        return view('admin.photographers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotographerRequest $request)
    {
        $request->validated();
        $photographer = Photographer::create($request->all());
        $photographer->photo = ImageUploader::upload(request('photo'), 'photographers', 'photographers', 40);
        $photographer->save();
        return redirect()->route('admin.photographer.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photographer $photographer
     * @return \Illuminate\Http\Response
     */
    public function show(Photographer $photographer)
    {
        //
    }

    public function adminShow(Photographer $photographer)
    {
        return view('admin.photographers.show', ['photographer' => $photographer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photographer $photographer
     * @return \Illuminate\Http\Response
     */
    public function edit(Photographer $photographer)
    {
        return view('admin.photographers.edit', ['photographer' => $photographer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Photographer $photographer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotographerRequest $request, Photographer $photographer)
    {
        $request->validated();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete("/large/" . $photographer->photo);
            Storage::disk('public')->delete("/medium/" . $photographer->photo);
            Storage::disk('public')->delete("/small/" . $photographer->photo);
            $photographer->photo = ImageUploader::upload(request('photo'), 'photographers', 'photographers', 40);
            $photographer->save();
        }
        $photographer->update($request->except('photo'));
        return redirect()->route('admin.photographer.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photographer $photographer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photographer $photographer)
    {
        $photographer->delete();
        return redirect()->back();
    }

    public function datatableData()
    {
        return DataTables::of(Photographer::query())
            ->editColumn('full_name', function (Photographer $photographer) {
                return '<a href="' . route('admin.photographer.show', $photographer) . '">' . $photographer->full_name . '</a>';
            })
            ->editColumn('photo', function (Photographer $photographer) {
                return '<img src="' . asset('/storage/small/' . $photographer->photo) . '" height="100">';
            })
            ->addColumn('actions', function (Photographer $photographer) {
                return view('admin.actions', ['type' => 'photographers', 'model' => $photographer]);
            })
            ->rawColumns(['full_name', 'photo'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.photographers.index');
    }
}

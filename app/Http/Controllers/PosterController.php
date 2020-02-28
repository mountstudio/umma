<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosterRequest;
use App\Http\Requests\UpdatePosterRequest;
use App\Poster;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PosterController extends Controller
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
        return view('admin.posters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosterRequest $request)
    {
        $request->validated();
        $poster = Poster::create($request->all());
        $poster->main_photo = ImageUploader::upload(request('main_photo'), 'posters', 'posters', 40);
        $poster->save();
        return redirect()->route('admin.poster.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        //
    }

    public function adminShow(Poster $poster)
    {
        return view('admin.posters.show', ['poster' => $poster]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        return view('admin.posters.edit', ['poster' => $poster]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePosterRequest $request, Poster $poster)
    {
        $request->validated();
        if (!$request->hasFile('main_photo')) {
            $poster->update($request->all());
        } else {
            Storage::disk('public')->delete("/large/" . $poster->main_photo);
            Storage::disk('public')->delete("/medium/" . $poster->main_photo);
            Storage::disk('public')->delete("/small/" . $poster->main_photo);
            $poster->update($request->all());
            $poster->main_photo = ImageUploader::upload(request('main_photo'), 'posters', 'posters', 40);
            $poster->save();
        }
        return redirect()->route('admin.poster.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        $poster->delete();
        return redirect()->route('admin.poster.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Poster::query())
            ->editColumn('name', function (Poster $poster) {
                return '<a href="' . route('admin.poster.show', $poster) . '">' . $poster->name . '</a>';
            })
            ->editColumn('main_photo', function (Poster $poster) {
                return '<img src="' . asset('/storage/small/' . $poster->main_photo) . '" height="100">';
            })
            ->addColumn('actions', function (Poster $poster) {
                return view('admin.actions', ['type' => 'posters', 'model' => $poster]);
            })
            ->rawColumns(['name', 'main_photo'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.posters.index');
    }
}

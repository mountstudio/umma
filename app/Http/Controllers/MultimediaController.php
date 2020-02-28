<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMultimediaRequest;
use App\Http\Requests\UpdateMultimediaRequest;
use App\Multimedia;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MultimediaController extends Controller
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
        return view('admin.multimedia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMultimediaRequest $request)
    {
        $request->validated();
        $multimedia = Multimedia::create($request->all());
        $multimedia->url_photo = ImageUploader::upload(request('url_photo'), 'multimedia', 'multimedia', 40);
        $multimedia->save();
        return redirect()->route('admin.multimedia.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Multimedia $multimedia
     * @return \Illuminate\Http\Response
     */
    public function show(Multimedia $multimedia)
    {
    }

    public function adminShow(Multimedia $multimedia)
    {
        return view('admin.multimedia.show', ['multimedia' => $multimedia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Multimedia $multimedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Multimedia $multimedia)
    {
        return view('admin.multimedia.edit', ['multimedia' => $multimedia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Multimedia $multimedia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMultimediaRequest $request, Multimedia $multimedia)
    {
        $request->validated();
        if (!$request->hasFile('url_photo')) {
            $multimedia->update($request->all());
        } else {
            Storage::disk('public')->delete("/large/" . $multimedia->url_photo);
            Storage::disk('public')->delete("/medium/" . $multimedia->url_photo);
            Storage::disk('public')->delete("/small/" . $multimedia->url_photo);
            $multimedia->update($request->all());
            $multimedia->url_photo = ImageUploader::upload(request('url_photo'), 'multimedia', 'multimedia', 40);
            $multimedia->save();
        }
        return redirect()->route('admin.multimedia.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Multimedia $multimedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multimedia $multimedia)
    {
        $multimedia->delete();
        return redirect()->route('admin.multimedia.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Multimedia::query())
            ->editColumn('title', function (Multimedia $multimedia) {
                return '<a href="' . route('admin.multimedia.show', $multimedia) . '">' . $multimedia->title . '</a>';
            })
            ->editColumn('url_video', function (Multimedia $multimedia) {
                return '<a href=' . $multimedia->url_video . '>' . $multimedia->url_video . '</a>';
            })
            ->editColumn('url_photo', function (Multimedia $multimedia) {
                return '<img src="' . asset('/storage/small/' . $multimedia->url_photo) . '" height="100">';
            })
            ->addColumn('actions', function (Multimedia $multimedia) {
                return view('admin.actions', ['type' => 'multimedia', 'model' => $multimedia]);
            })
            ->rawColumns(['title', 'url_video', 'url_photo'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.multimedia.index');
    }
}

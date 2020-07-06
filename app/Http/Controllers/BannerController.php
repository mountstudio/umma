<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Services\ImageUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = Banner::create($request->all());
        $banner->image = ImageUploader::upload(request('image'), 'banners', 'banners', 90);
        $banner->save();
        return redirect()->route('admin.banner.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function adminShow(Banner $banner)
    {
        return view('admin.banners.show', ['banner' => $banner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete("/large/" . $banner->image);
            Storage::disk('public')->delete("/medium/" . $banner->image);
            Storage::disk('public')->delete("/small/" . $banner->image);
            $banner->image = ImageUploader::upload(request('image'), 'banners', 'banners', 90);
        }
        $banner->update($request->except('image'));
        $banner->save();
        return redirect()->route('admin.banner.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.datatable');
    }

    public function datatableData()
    {

        return DataTables::of(Banner::query())
            ->editColumn('number', function (Banner $banner) {
                return '<a href="'. route('admin.banner.show', $banner) .'">'. $banner->number .'</a>';
            })
            ->editColumn('image', function (Banner $banner) {
                return '<img src="' . asset('/storage/small/' . $banner->image) . '" height="100">';
            })
            ->addColumn('actions', function (Banner $banner) {
                return view('admin.actions', ['type' => 'banners', 'model' => $banner]);
            })
            ->rawColumns(['number', 'image'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.banners.index');
    }
}

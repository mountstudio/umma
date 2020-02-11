<?php

namespace App\Http\Controllers;

use App\Article;
use App\Multimedia;
use App\Photographer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        return view('admin.photographer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function show(Photographer $photographer)
    {
        //
    }
    public function adminShow(Photographer $photographer)
    {
        return view('admin.photographer.show', ['photographer'=>$photographer]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function edit(Photographer $photographer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photographer $photographer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photographer  $photographer
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
            ->editColumn('full_name',function (Photographer $photographer){
                return '<a href="' . route('admin.photographer.show',$photographer) . '">'.$photographer->full_name.'</a>';
            })
            ->editColumn('photo', function (Photographer $photographer){
                return '<img src="'.asset('/storage/photographers/'.$photographer->photo).'" height="100">';
            })
            ->rawColumns(['full_name','photo'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.photographer.index');
    }
}

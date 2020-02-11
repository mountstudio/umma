<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;
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
        //
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
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        //
    }
    public function adminShow(Poster $poster)
    {
        return view('admin.posters.show', ['poster'=>$poster]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poster $poster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        //
    }
    public function datatableData()
    {
        return DataTables::of(Poster::query())
            ->editColumn('name',function (Poster $poster){
                return '<a href="' . route('admin.poster.show',$poster) . '">'.$poster->name.'</a>';
            })
            ->editColumn('main_photo',function (Poster $poster){
                return '<img src="'.asset('/storage/posters/'.$poster->main_photo).'" height="100">';
            })
            ->rawColumns(['name','main_photo'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.posters.index');
    }
}

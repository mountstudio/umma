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
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function show(Photographer $photographer)
    {
        //
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
        //
    }

    public function datatableData()
    {

//        return DataTables::eloquent($model)
//            ->editColumn('name', function(User $user) {
//                return 'Hi ' . $user->name . '!';
//            })
//            ->toJson();
        return DataTables::of(Photographer::query())
            ->editColumn('name',function (Article $photographer){
                return '<a href="' . route('admin.photographer.show',$photographer) . '">'.$photographer->name.'</a>';
            })
            ->rawColumns(['name'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.photographer.index');
    }
}

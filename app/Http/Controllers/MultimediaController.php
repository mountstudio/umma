<?php

namespace App\Http\Controllers;

use App\Article;
use App\Multimedia;
use Illuminate\Http\Request;
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
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function show(Multimedia $multimedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Multimedia $multimedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multimedia $multimedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multimedia $multimedia)
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
        return DataTables::of(Multimedia::query())
            ->editColumn('name',function (Article $multimedia){
                return '<a href="' . route('admin.multimedia.show',$multimedia) . '">'.$multimedia->name.'</a>';
            })
            ->rawColumns(['name'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.multimedia.index');
    }
}
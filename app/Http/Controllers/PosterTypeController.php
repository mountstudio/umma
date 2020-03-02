<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosterTypeRequest;
use App\Http\Requests\UpdatePosterTypeRequest;
use App\PosterType;
use Yajra\DataTables\Facades\DataTables;

class PosterTypeController extends Controller
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
        return view('admin.posterTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosterTypeRequest $request)
    {
        PosterType::create($request->all());
        return redirect()->route('admin.posterType.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PosterType $posterType
     * @return \Illuminate\Http\Response
     */
    public function show(PosterType $posterType)
    {
        //
    }

    public function adminShow(PosterType $posterType)
    {
        return view('admin.posterTypes.show', ['posterType' => $posterType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PosterType $posterType
     * @return \Illuminate\Http\Response
     */
    public function edit(PosterType $posterType)
    {
        return view('admin.posterTypes.edit', ['posterType' => $posterType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\PosterType $posterType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePosterTypeRequest $request, PosterType $posterType)
    {
        $posterType->update($request->all());
        return redirect()->route('admin.posterType.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PosterType $posterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PosterType $posterType)
    {
        $posterType->delete();
        return redirect()->route('admin.posterType.datatable');
    }

    public function datatableData()
    {

        return DataTables::of(PosterType::query())
            ->editColumn('name', function (PosterType $posterType) {
                return '<a href="' . route('admin.posterType.show', $posterType) . '">' . $posterType->name . '</a>';
            })
            ->addColumn('actions', function (PosterType $posterType) {
                return view('admin.actions', ['type' => 'posterTypes', 'model' => $posterType]);
            })
            ->rawColumns(['name'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.posterTypes.index');
    }
}

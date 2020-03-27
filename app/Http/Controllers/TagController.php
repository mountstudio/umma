<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Tag;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
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
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $request->validated();
        Tag::create($request->all());
        return redirect()->route('admin.tag.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $articlesByTag = $tag->articles()->paginate(6);
        return view('show_tags',
            [
                'tag' => $tag,
                'articlesByTag' => $articlesByTag,
            ]);
    }

    public function adminShow(Tag $tag)
    {
        return view('admin.tags.show', ['tag' => $tag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $request->validated();
        $tag->update($request->all());
        return redirect()->route('admin.tag.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.datatable');
    }

    public function datatableData()
    {

        return DataTables::of(Tag::query())
            ->editColumn('name', function (Tag $tag) {
                return '<a href="' . route('admin.tag.show', $tag) . '">' . $tag->name . '</a>';
            })
            ->addColumn('actions', function (Tag $tag) {
                return view('admin.actions',['type' => 'tags', 'model'=> $tag]);
            })
            ->rawColumns(['name'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.tags.index');
    }
}

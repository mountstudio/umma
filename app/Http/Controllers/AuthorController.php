<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.authors.index', [
            'authors' => Author::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request)
    {
        $request->validated();
        $author = Author::create($request->all());
        $author->view_main = $request->exists('view_main');
        $author->photo = ImageUploader::upload(request('photo'), 'authors', 'authors', 40);
        $author->save();
        return redirect()->route('admin.author.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        $articlesByAuthor = $author->articles()->paginate(6);
        return view('show_for_authors',
            [
                'author' => $author,
                'articlesByAuthor' => $articlesByAuthor,
            ]);
    }

    public function adminShow(Author $author)
    {
        return view('admin.authors.show', ['author' => $author]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.authors.edit', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $request->validated();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete("/large/" . $author->photo);
            Storage::disk('public')->delete("/medium/" . $author->photo);
            Storage::disk('public')->delete("/small/" . $author->photo);
            $author->photo = ImageUploader::upload(request('photo'), 'authors', 'authors', 40);
        }
        $author->update($request->except('photo'));
        $author->view_main = $request->exists('view_main');
        $author->save();
        return redirect()->route('admin.author.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.author.datatable');
    }

    public function datatableData()
    {

        return DataTables::of(Author::query())
            ->editColumn('full_name', function (Author $author) {
                return '<a href="' . route('admin.author.show', $author) . '">' . $author->full_name . '</a>';
            })
            ->editColumn('photo', function (Author $author) {
                return '<img src="' . asset('/storage/small/' . $author->photo) . '" height="100">';
            })
            ->addColumn('actions', function (Author $author) {
                return view('admin.actions', ['type' => 'authors', 'model' => $author]);
            })
            ->rawColumns(['full_name', 'photo'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.authors.index');
    }

    public function showAuthors()
    {
        return view('authors.authors_list', ['authors' => Author::paginate(5)]);
    }
}

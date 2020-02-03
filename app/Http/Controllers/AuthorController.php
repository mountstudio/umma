<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Helpers\ImageSaver;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author($request->all());
        if ($image = $request->photo) {
            $filename = ImageSaver::save($image, "uploads", "my_photo");
            $author->photo = $filename;
            $author->save();
        }
        return redirect()->back()->with('success','Автор создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view('authors.show', ['author'=>$author]);
    }
    public function adminShow(Author $author)
    {
        return view('admin.authors.show', ['author'=>$author]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('authors.edit', ['author'=>$author]);
    }

    public function adminShow(Author $author)
    {
        return view('admin.author.show', ['author'=>$author]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back();
    }
    public function datatableData()
    {

//        return DataTables::eloquent($model)
//            ->editColumn('name', function(User $user) {
//                return 'Hi ' . $user->name . '!';
//            })
//            ->toJson();
        return DataTables::of(Author::query())
            ->editColumn('name',function (Article $author){
                return '<a href="' . route('admin.authors.show',$author) . '">'.$author->name.'</a>';
            })
            ->rawColumns(['name'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.authors.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Yajra\DataTables\Facades\DataTables;

class CommentController extends Controller
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
        return view('admin.comments.create',
            [
                'articles' => Article::all(),
                'users' => User::all(),
                'comments' => Comment::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user_id != 0) {
            $comment = New Comment();
            $user = User::find($request->user_id);
            $comment->full_name = $user->name;
            $comment->phone = $user->phone;
            $comment->mail = $user->email;
            $comment->article_id = $request->input('article_id');
            $comment->user_id = $request->input('user_id');
            $comment->content =$request->input('content');
            $comment->save();
        } else {
           Comment::create($request->except('user_id'));
        }
        return redirect()->route('admin.comment.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.comment.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Comment::all())
            ->editColumn('id', function (Comment $comment) {
                return '<a href="' . route('admin.comment.show', $comment) . '">' . $comment->id . '</a>';
            })
            ->addColumn('actions', function (Comment $comment) {
                return view('admin.actions', [
                    'type' => 'comments',
                    'model' => $comment
                ]);
            })
            ->rawColumns(['id'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.comments.index');
    }
}

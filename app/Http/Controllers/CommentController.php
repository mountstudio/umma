<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\User;
use Illuminate\Http\Request;
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
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        $request->validated();
        if ($request->user_id == 0) {
            Comment::create($request->except('user_id'));
        } else {
            $comment = New Comment();
            $user = User::find($request->user_id);
            $comment->full_name = $user->name;
            $comment->phone = $user->phone;
            $comment->mail = $user->email;
            $comment->article_id = $request->input('article_id');
            $comment->user_id = $request->input('user_id');
            $comment->content = $request->input('content');
            $comment->save();
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

    public function adminShow(Comment $comment)
    {
        return view('admin.comments.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('admin.comments.edit',
            [
                'articles' => Article::all(),
                'users' => User::all(),
                'comment' => $comment,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $request->validated();
        if ($request->user_id == 0) {
            $comment->update($request->except('user_id'));
            $comment->user_id = null;
        } else {
            $user = User::find($request->user_id);
            $comment->full_name = $user->name;
            $comment->phone = $user->phone;
            $comment->mail = $user->email;

            $comment->article_id = $request->input('article_id');
            $comment->user_id = $request->input('user_id');
            $comment->content = $request->input('content');
        }
        $comment->save();
        return redirect()->route('admin.comment.datatable');
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
            ->editColumn('article_id', function (Comment $comment) {
                return $comment->article->name;
            })
            ->editColumn('user_id', function (Comment $comment) {
                if ($comment->user) {
                    return '<i class="fas fa-check fa-lg"></i>';
                } else {
                    return '<i class="fas fa-ban fa-lg"></i>';
                }
            })
            ->addColumn('actions', function (Comment $comment) {
                return view('admin.actions', [
                    'type' => 'comments',
                    'model' => $comment
                ]);
            })
            ->rawColumns(['id', 'user_id'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.comments.index');
    }

    public function userStore(StoreCommentRequest $request)
    {
        $request->validated();
        if ($request->user_id == 0) {
            Comment::create($request->except('user_id'));
        } else {
            $comment = New Comment();
            $user = User::find($request->user_id);
            $comment->full_name = $user->name;
            $comment->phone = $user->phone;
            $comment->mail = $user->email;
            $comment->article_id = $request->input('article_id');
            $comment->user_id = $request->input('user_id');
            $comment->content = $request->input('content');
            $comment->parent_id = $request->input('parent_id');
            $comment->save();
        }
        return redirect()->back();
    }
}

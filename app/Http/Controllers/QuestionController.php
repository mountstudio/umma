<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Question;
use App\QuestionCategory;
use App\Services\ContentCutting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class QuestionController extends Controller
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

        return view('admin.questions.create',
            [
                'questionCategories' => QuestionCategory::all(),
                'users' => User::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $request->validated();
        if ($request->user_id == 0) {
            $question = Question::create($request->except(['user_id', 'is_anonim']));
            $question->is_anonim = $request->exists('is_anonim');
            $question->save();
        } else {
            $question = New Question();
            $user = User::find($request->user_id);
            $question->user_id = $user->id;
            $question->full_name = $user->name;
            $question->phone = $user->phone;
            $question->mail = $user->email;

            $question->name = $request->input('name');
            $question->is_anonim = $request->exists('is_anonim');
            $question->content = $request->input('content');
            $question->answer = $request->input('answer');
            $question->category_id = $request->input('category_id');
            $question->save();
        }
        return redirect()->route('admin.question.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.show', ['question' => $question]);
    }

    public function adminShow(Question $question)
    {
        return view('admin.questions.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.questions.edit', [
            'question' => $question,
            'questionCategories' => QuestionCategory::all(),
            'users'=>User::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $request->validated();

        if ($request->user_id == 0) {
            $question->update($request->except(['user_id', 'is_anonim']));
            $question->user_id = null;
            $question->answer = $request->input('answer');
            $question->is_anonim = $request->exists('is_anonim');
        } else {
            $user = User::find($request->user_id);
            $question->user_id = $user->id;
            $question->full_name = $user->name;
            $question->phone = $user->phone;
            $question->mail = $user->email;

            $question->name = $request->input('name');
            $question->is_anonim = $request->exists('is_anonim');
            $question->content = $request->input('content');
            $question->answer = $request->input('answer');
            $question->category_id = $request->input('category_id');
        }
        $question->save();
        return redirect()->route('admin.question.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.question.datatable');
    }

    public function datatableData()
    {

        return DataTables::of(Question::query())
            ->editColumn('name', function (Question $question) {
                return '<a href="' . route('admin.question.show', $question) . '">' . $question->name . '</a>';
            })
            ->editColumn('category_id', function (Question $question) {
                if ($question->category->count()) {
                    return $question->category->name;
                } else {
                    return $question->category->name;;
                }
            })
            ->editColumn('user_id', function (Question $question) {
                if ($question->user) {
                    return '<i class="fas fa-check fa-lg"></i>';
                } else {
                    return '<i class="fas fa-ban fa-lg"></i>';
                }
            })
            ->editColumn('is_anonim', function (Question $question) {
                if ($question->is_anonim) {
                    return '<i class="fas fa-check fa-lg"></i>';
                } else {
                    return '<i class="fas fa-ban fa-lg"></i>';
                }
            })
            ->addColumn('actions', function (Question $question) {
                return view('admin.actions', ['type' => 'questions', 'model' => $question]);
            })
            ->addColumn('is_solved', function (Question $question) {
                if ($question->answer) {
                    return '<i class="fas fa-check fa-lg"></i>';
                } else {
                    return '<i class="fas fa-ban fa-lg"></i>';
                }
            })
            ->rawColumns(['name', 'is_anonim', 'user_id', 'solution', 'is_solved'])
            ->make(true);
    }

    public
    function datatable()
    {
        return view('admin.questions.index');
    }

    public
    function scientists()
    {
        $questions = Question::whereNotNull('answer')->paginate(3);
        foreach ($questions as $question) {
            $question->content = ContentCutting::cut_contents($question->content, 40, 160);
            $question->answer = ContentCutting::cut_contents($question->answer, 40, 160);
        }
        return view('scientists', [
            'categories' => QuestionCategory::all(),
            'questions' => $questions,
        ]);
    }

    public
    function userStore(StoreQuestionRequest $request)
    {
        $request->validated();
        if ($request->user_id == 0) {
            $question = Question::create($request->except(['user_id', 'is_anonim']));
            $question->is_anonim = $request->exists('is_anonim');
            $question->save();
        } else {
            $question = New Question();
            $user = User::find($request->user_id);

            $question->user_id = $user->id;
            $question->full_name = $user->name;
            $question->phone = $user->phone;
            $question->mail = $user->email;

            $question->name = $request->input('name');
            $question->is_anonim = $request->exists('is_anonim');
            $question->content = $request->input('content');
            $question->category_id = $request->input('category_id');
            $question->save();
        }
        return redirect()->back();
    }
}

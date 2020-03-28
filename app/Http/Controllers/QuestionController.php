<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Question;
use App\QuestionCategory;
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

        return view('admin.questions.create', ['questionCategories' => QuestionCategory::all()]);
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
        Question::create($request->all());
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
            'questionCategories' => QuestionCategory::all()]);
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
        $question->update($request->all());
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
            ->addColumn('actions', function (Question $question) {
                return view('admin.actions', ['type' => 'questions', 'model' => $question]);
            })
            ->rawColumns(['name'])
            ->make(true);
    }

    public function datatable()
    {
        return view('admin.questions.index');
    }

    public function scientists()
    {
        $questions = Question::whereNotNull('answer')->paginate(3);
        foreach ($questions as $question) {
            $question->content = self::cut_contents($question->content, 40, 160);
            $question->answer = self::cut_contents($question->answer, 40, 160);
        }
        return view('scientists', [
            'categories' => QuestionCategory::all(),
            'questions' => $questions,
        ]);
    }

    public static function cut_contents($content, $countWords, $countSymbols)
    {
        if (iconv_strlen($content) < $countSymbols - 3) {
            return $content;
        } else {
            return self::recursive_cut_content($content, $countWords, $countSymbols);
        }
    }

    public static function recursive_cut_content($content, $countWords, $countSymbols)
    {
        $content = Str::words($content, $countWords, '');

        if (iconv_strlen($content) < $countSymbols - 3) {
            $strWithoutLastSymbol = preg_replace('/(!|,|\.|\'|\"|\:|\.{2}|\.{3}|\;)$/', '', $content);
            return $strWithoutLastSymbol . '...';
        } else {
            return self::recursive_cut_content($content, --$countWords, $countSymbols);
        }
    }
}

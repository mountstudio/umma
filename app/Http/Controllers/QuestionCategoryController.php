<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionsCategoryRequest;
use App\Http\Requests\UpdateQuestionsCategoryRequest;
use App\QuestionCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class QuestionCategoryController extends Controller
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
        return view('admin.questionCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionsCategoryRequest $request)
    {
        $request->validated();
        QuestionCategory::create($request->all());
        return redirect()->route('admin.questionCategory.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionCategory $questionCategory)
    {
        //
    }

    public function adminShow(QuestionCategory $questionCategory)
    {
        return view('admin.questionCategories.show', ['questionCategory' => $questionCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionCategory $questionCategory)
    {
        return view('admin.questionCategories.edit',['questionCategory'=>$questionCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionsCategoryRequest $request, QuestionCategory $questionCategory)
    {
        $request->validated();
        $questionCategory->update($request->all());
        return redirect()->route('admin.questionCategory.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionCategory $questionCategory)
    {
        $questionCategory->delete();
        return redirect()->route('admin.questionCategory.datatable');
    }
    public function datatableData()
    {
        return DataTables::of(QuestionCategory::query())
            ->editColumn('name',function (QuestionCategory $questionCategory){
                return '<a href="' . route('admin.questionCategory.show', $questionCategory) . '">'.$questionCategory->name.'</a>';
            })
            ->addColumn('actions', function (QuestionCategory $questionCategory){
                return view('admin.actions',['type'=>'questionCategories', 'model'=>$questionCategory]);
            })
            ->rawColumns(['name'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.questionCategories.index');
    }
}

<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionCategory $questionCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionCategory $questionCategory)
    {
        //
    }
    public function datatableData()
    {
        return DataTables::of(QuestionCategory::query())
            ->editColumn('name',function (QuestionCategory $category){
                return '<a href="' . route('admin.questionCategory.show',$category) . '">'.$category->name.'</a>';
            })
            ->rawColumns(['name'])
            ->make(true);
    }
    public function datatable()
    {
        return view('admin.questionCategories.index');
    }
}

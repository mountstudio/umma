<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Project;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
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
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $request->validated();
        $project = Project::create($request->all());
        $project->image = ImageUploader::upload(request('image'), 'projects', 'projects', 40);
        $project->save();
        return redirect()->route('admin.project.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

    }

    public function adminShow(Project $project)
    {
        return view('admin.projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $request->validated();
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete("/large/" . $project->image);
            Storage::disk('public')->delete("/medium/" . $project->image);
            Storage::disk('public')->delete("/small/" . $project->image);
            $project->image = ImageUploader::upload(request('image'), 'projects', 'projects', 40);
            $project->save();
        }
        $project->update($request->except('image'));
        return redirect()->route('admin.project.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.datatable');
    }

    public function datatableData()
    {
        return DataTables::of(Project::query())
            ->editColumn('name', function (Project $project) {
                return '<a href="' . route('admin.project.show', $project) . '">' . $project->name . '</a>';
            })
            ->editColumn('image', function (Project $project) {
                return '<img src="' . asset('/storage/small/' . $project->image) . '" height="100">';
            })
            ->addColumn('actions', function (Project $project) {
                return view('admin.actions', ['type' => 'projects', 'model' => $project]);
            })
            ->rawColumns(['name', 'image'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.projects.index');
    }

}

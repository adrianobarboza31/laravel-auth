<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\project;
use App\Models\Category;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $technologies = Technology::all();
        return view('admin.projects.create',compact('categories','technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data= $request->validated();
        $newProject = new project();
        $newProject->nome_progetto=$data['nome_progetto'];
        if($request->hasFile('cover_image')){
            $img_path = Storage::disk('public')->put('uploads', $request->cover_image);
            $data['cover_image'] = $img_path;
        }

        $newProject = project::create($data);
        if($request->has('nome_technology')){
            $newProject->technologies()->sync($request->nome_technology);
        }
         return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show(project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        $categories = Category::all();
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project','categories','technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, project $project)
    {
        $data = $request->validated();
        if($request->hasFile('cover_image')){
            if($project->cover_image){
                Storage::delete($project->cover_image);
            }
            $img_path = Storage::disk('public')->put('uploads', $request->cover_image);
            $data['cover_image'] = $img_path;
        }
        $project->update($data);
        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        }
        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', "$project->nome_progetto deleted successfully");
    }
}

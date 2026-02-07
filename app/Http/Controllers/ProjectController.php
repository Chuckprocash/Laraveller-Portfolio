<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('skill')->get();
        return Inertia::render('Project/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Project/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //
        $request->validate([
            'skill_id' => 'required',
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'project_url' => 'nullable',
        ]);

        if($request->hasFile('image')){
           $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/Skills'), $imageName);
            $imagePath = 'images/Skills/' . $imageName;
        }

        Project::create([
            'skill_id' => $request->skill_id,
            'name' => $request->name,
            'project_url' => $request->project_url,
            'image' => $imagePath
        ]);

        return redirect()->route('projects.index')->with('success', 'New Project Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Project/Edit', [
            'project' => $project,
            'skills' => $skills,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'skill_id' => 'required',
        'project_url' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::disk('public')->delete('Projects/' . $project->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/Skills'), $imageName);
            $imagePath = 'images/Skills/' . $imageName;
            $validated['image'] = $imagePath;
        }else{
            unset($validated['image']);
        }

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'project updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $project)
    {
        // Delete image
        if ($project->image) {
            Storage::disk('public')->delete('Projects/' . $project->image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'project deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'status' => 'required|in:draft,published',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'project_url' => $request->project_url,
            'image' => $path,
            'status' => $request->status,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created!');
    }

    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $request->validate([
            'title' => 'required',
            'status' => 'required|in:draft,published',
        ]);

        $data = $request->only(['title', 'description', 'project_url', 'status']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated!');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted!');
    }
}

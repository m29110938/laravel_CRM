<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::all(),
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // create the project
        $attributes = request()->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);

        Project::create($attributes);

        return redirect('/project')->with('success', 'Your project has been created.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    public function update(Project $project)
    {
        // update the project
        $attributes = request()->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);

        $project->update($attributes);

        return back()->with('success', 'Project Updated!');
    }

    public function delete(Project $project)
    {
        $project->delete();

        return redirect('/project')->with('success', 'Your project has been deleted.');
    }
}

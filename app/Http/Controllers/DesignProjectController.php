<?php

namespace App\Http\Controllers;

use App\Helpers\SlugHelper;
use App\Helpers\UploadHelper;
use App\Models\DesignProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designProject = DesignProject::latest()->get();
        return view('admin.projects.index', compact('designProject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'type'        => 'required|in:web,app,graphic',
            'link'        => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = UploadHelper::uploadImage($request->file('image_path'));
        } else {
            $validated['image_path'] = null;
        }

        $validated['slug'] = SlugHelper::generateUniqueSlug($validated['title'], 'slug', new DesignProject());


        DesignProject::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(DesignProject $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesignProject $project)
    {
        return view('admin.projects.edit', [
            'designProject' => $project,  
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DesignProject $project)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'type'        => 'required|in:web,app,graphic',
            'link'        => 'nullable|string|max:255',
        ]);

        // Handle new image upload
        if ($request->hasFile('image_path')) {
            if ($project->image_path && \Storage::disk('public')->exists($project->image_path)) {
                \Storage::disk('public')->delete($project->image_path);
            }

            $validated['image_path'] = UploadHelper::uploadImage($request->file('image_path'));
        }

        $oldSlug = $project->slug; // ✅ Save old slug before updating

        // Only regenerate if title changed
        if ($request->title !== $project->title) {
            $validated['slug'] = SlugHelper::generateUniqueSlug($validated['title'], 'slug', $project);
        }

        $project->update($validated);

        // Check if slug changed
        if (isset($validated['slug']) && $validated['slug'] !== $oldSlug) {
            return redirect()->route('projects.index')
                ->with('success', 'Project updated successfully. Note: URL slug has changed.');
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DesignProject $project)
    {
        // 1. If there is an image, delete it from storage
        if ($project->image_path && \Storage::disk('public')->exists($project->image_path)) {
            \Storage::disk('public')->delete($project->image_path);
        }

        // 2. Now delete the project itself
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

}

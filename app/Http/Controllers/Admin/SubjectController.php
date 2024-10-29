<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Str;
use App\Models\Grade;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::with('grade')->get();
        return view('admin.subjects.subjects_list', compact('subjects'));
    }

    public function create()
    {
        // Fetch all grades from the database
        $grades = Grade::all();

        // Pass grades to the view
        return view('admin.subjects.add_subjects', compact('grades'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'grade_id' => 'required|exists:grades,id',
        ]);

        // Create a slug from the name
        $data['slug'] = Str::slug($data['name']);

        // Create the subject with the slug and associated grade_id
        $subject = Subject::create($data);

        return redirect()->route('admin.subjects.index')->with('message', 'Subject created successfully!');
    }

    public function edit($id)
    {
        $subject = Subject::with('grade')->findOrFail($id);
        $grades = Grade::all();

        return view('admin.subjects.edit_subjects', compact('subject', 'grades'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'grade_id' => 'required|exists:grades,id',
        ]);

        // Find the subject by ID or fail if not found
        $subject = Subject::findOrFail($id);

        // Create a new slug based on the updated name
        $slug = Str::slug($data['name']);

        // Check if the slug already exists and modify if necessary
        $existingSlugCount = Subject::where('slug', $slug)->where('id', '!=', $id)->count();
        if ($existingSlugCount > 0) {
            $slug = $slug . '-' . ($existingSlugCount + 1); // Append a suffix for uniqueness
        }

        $data['slug'] = $slug;

        // Update the subject with new data
        $subject->update($data);

        // Redirect to the subjects index with a success message
        return redirect()->route('admin.subjects.index')->with('message', 'Subject updated successfully!');
    }


    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('admin.subjects.index')->with('message', 'Subject Deleted successfully!');
    }
}

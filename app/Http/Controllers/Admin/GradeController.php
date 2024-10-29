<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Str;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all grades from the database
        $grades = Grade::all();

        // Pass the grades collection to the view
        return view('admin.grades.grades_list', compact('grades'));
    }

    public function create()
    {
        return view('admin.grades.add_grades');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a slug from the name
        $data['slug'] = Str::slug($data['name']);

        // Create the grade with the slug
        $grade = Grade::create($data);
        return redirect()->route('admin.grades.index')->with('message', 'Grade created successfully!');


    }

    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        return view('admin.grades.edit_grades', compact('grade'));
    }



    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Find the grade by ID or fail if not found
        $grade = Grade::findOrFail($id);

        // Create a new slug based on the updated name
        $slug = Str::slug($data['name']);

        // Check if the slug already exists and modify if necessary
        $existingSlugCount = Grade::where('slug', $slug)->where('id', '!=', $id)->count();
        if ($existingSlugCount > 0) {
            $slug = $slug . '-' . ($existingSlugCount + 1); // Append a suffix for uniqueness
        }

        $data['slug'] = $slug;

        // Update the grade with new data
        $grade->update($data);

        // Redirect to the grades index with a success message
        return redirect()->route('admin.grades.index')->with('message', 'Grade updated successfully!');
    }


    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();
        return redirect()->route('admin.grades.index')->with('message', 'Deleted Sucessfully  !');

    }
}

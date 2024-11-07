<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Worksheet;
use App\Models\Subtopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorksheetsController extends Controller
{
    // Display a list of worksheets for a specific subtopic
    public function index($subtopicId)
    {
        $worksheets = Worksheet::where('subtopic_id', $subtopicId)->get();
        $subtopic = Subtopic::findOrFail($subtopicId); // Fetch the subtopic
        return view('admin.worksheets.index', compact('worksheets', 'subtopic'));
    }


    // Show the form to create a new worksheet
    public function create($subtopicId)
    {
        $subtopic = Subtopic::findOrFail($subtopicId); // Fetch the subtopic
        return view('admin.worksheets.add', compact('subtopic'));
    }

    // Store a newly created worksheet
    public function store(Request $request, $subtopicId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Validate thumbnail
            'worksheets.*' => 'required|mimes:pdf|max:2048', // Validate PDF worksheets
        ]);

        // Create a slug from the name
        $slug = Str::slug($request['name']);

        // Define the directory for worksheets and thumbnails
        $worksheetDirectory = public_path('build/worksheets');
        $thumbnailDirectory = public_path('build/worksheets/thumbnails');

        // Ensure directories exist
        if (!file_exists($worksheetDirectory)) {
            mkdir($worksheetDirectory, 0777, true);
        }
        if (!file_exists($thumbnailDirectory)) {
            mkdir($thumbnailDirectory, 0777, true);
        }

        // Process the thumbnail if it's uploaded
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailName = time() . '_' . $thumbnailFile->getClientOriginalName();
            $thumbnailFile->move($thumbnailDirectory, $thumbnailName);
            $thumbnailPath = 'build/worksheets/thumbnails/' . $thumbnailName;
        }

        // Store each worksheet
        foreach ($request->file('worksheets') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($worksheetDirectory, $filename);

            // Create the worksheet record
            Worksheet::create([
                'subtopic_id' => $subtopicId,
                'name' => $request->name,
                'slug' => $slug,
                'description' => $request->description,
                'thumbnail' => $thumbnailPath,
                'file_path' => 'build/worksheets/' . $filename,
            ]);
        }

        return redirect()->route('admin.worksheets.index', $subtopicId)
            ->with('message', 'Worksheets uploaded successfully!');
    }

    // Show the form for editing a worksheet
    public function edit($subtopicId, $id)
    {
        $worksheet = Worksheet::where('id', $id)->where('subtopic_id', $subtopicId)->firstOrFail();

        return view('admin.worksheets.edit', compact('worksheet'));
    }



    // Update an existing worksheet
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'file_path' => 'nullable|file|mimes:pdf|max:2048', // Validate PDF file
        ]);

        $worksheet = Worksheet::findOrFail($id);
        $worksheetData = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // Update thumbnail if it's provided
        if ($request->hasFile('thumbnail')) {
            // Define the directory for thumbnails
            $thumbnailDirectory = public_path('build/worksheets/thumbnails');

            // Ensure directory exists
            if (!file_exists($thumbnailDirectory)) {
                mkdir($thumbnailDirectory, 0777, true);
            }
            // Process the new thumbnail
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailName = time() . '_' . $thumbnailFile->getClientOriginalName();
            $thumbnailFile->move($thumbnailDirectory, $thumbnailName);
            $worksheetData['thumbnail'] = 'build/worksheets/thumbnails/' . $thumbnailName;
        }

        // Update PDF file if it's provided
        if ($request->hasFile('file_path')) {
            // Define the directory for worksheets
            $worksheetDirectory = public_path('build/worksheets');

            // Ensure directory exists
            if (!file_exists($worksheetDirectory)) {
                mkdir($worksheetDirectory, 0777, true);
            }

            // Delete the old PDF file if it exists
            if ($worksheet->file_path && file_exists(public_path($worksheet->file_path))) {
                unlink(public_path($worksheet->file_path));
            }

            // Process the new PDF file
            $pdfFile = $request->file('file_path');
            $pdfName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfFile->move($worksheetDirectory, $pdfName);
            $worksheetData['file_path'] = 'build/worksheets/' . $pdfName;
        }

        // Update the worksheet with new data
        $worksheet->update($worksheetData);

        return redirect()->route('admin.worksheets.index', $worksheet->subtopic_id)
            ->with('message', 'Worksheet updated successfully!');
    }


    // Delete a worksheet
    public function destroy($subtopicId, $id)
    {
        $worksheet = Worksheet::findOrFail($id);

        // Optionally, delete the related files
        if ($worksheet->file_path && file_exists(public_path($worksheet->file_path))) {
            unlink(public_path($worksheet->file_path));
        }

        // Optionally, delete the thumbnail if it exists
        if ($worksheet->thumbnail && file_exists(public_path($worksheet->thumbnail))) {
            unlink(public_path($worksheet->thumbnail));
        }

        // Delete the worksheet record from the database
        $worksheet->delete();

        return redirect()->route('admin.worksheets.index', $subtopicId)
            ->with('message', 'Worksheet deleted successfully!');
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        if ($ids) {
            Worksheet::whereIn('id', $ids)->delete();
            return response()->json(['message' => 'Selected worksheets have been deleted successfully.']);
        }

        return response()->json(['message' => 'No worksheets selected.'], 400);
    }



}

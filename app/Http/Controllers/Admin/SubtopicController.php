<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subtopic;
use App\Models\Topic;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SubtopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subtopics = Subtopic::with('topic')->get();
        return view('admin.subtopics.subtopics_list', compact('subtopics'));
    }

    public function create()
    {
        $topics = Topic::all();
        return view('admin.subtopics.add_subtopics', compact('topics'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'topic_id' => 'required|exists:topics,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate the image file
        ]);

        // Create a slug from the name
        $data['slug'] = Str::slug($data['name']);

        // Define the path for thumbnails within the public folder
        $thumbnailPath = 'build/subtopics_thumbnails';

        // Check if the directory exists in the public folder, if not, create it
        if (!File::exists(public_path($thumbnailPath))) {
            File::makeDirectory(public_path($thumbnailPath), 0755, true);
        }

        // Handle the thumbnail upload
        if ($request->hasFile('thumbnail')) {
            // Get the uploaded file
            $file = $request->file('thumbnail');

            // Define a unique filename
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the public/build/topics_thumbnails directory
            $file->move(public_path($thumbnailPath), $filename);

            // Save the file path to the database as a relative path
            $data['thumbnail'] = $thumbnailPath . '/' . $filename;
        }

        // Create the topic with the slug and thumbnail path
        $subtopic = Subtopic::create($data);

        // Redirect with a success message
        return redirect()->route('admin.subtopics.index')->with('message', 'SubTopic created successfully!');
    }

    public function edit($id)
    {
        $subtopic = Subtopic::with('topic')->findOrFail($id);
        $topics = Topic::all();
        return view('admin.subtopics.edit_subtopics', compact('subtopic', 'topics'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'topic_id' => 'required|exists:topics,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate only if a new image is uploaded
        ]);

        // Find the topic by ID or throw a 404 if not found
        $subtopic = Subtopic::findOrFail($id);

        // Update the slug if the name has changed
        $data['slug'] = Str::slug($data['name']);

        // Handle the thumbnail image update
        if ($request->hasFile('thumbnail')) {
            // Define the path for thumbnails within the public folder
            $thumbnailPath = 'build/subtopics_thumbnails';

            // Check if the directory exists in the public folder, if not, create it
            if (!File::exists(public_path($thumbnailPath))) {
                File::makeDirectory(public_path($thumbnailPath), 0755, true);
            }

            // Delete the old thumbnail if it exists
            if ($subtopic->thumbnail && File::exists(public_path($subtopic->thumbnail))) {
                File::delete(public_path($subtopic->thumbnail));
            }

            // Get the uploaded file
            $file = $request->file('thumbnail');

            // Define a unique filename
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the public/build/topics_thumbnails directory
            $file->move(public_path($thumbnailPath), $filename);

            // Save the new file path to the data array for database update
            $data['thumbnail'] = $thumbnailPath . '/' . $filename;
        } else {
            // If no new thumbnail is uploaded, retain the existing path
            $data['thumbnail'] = $subtopic->thumbnail;
        }

        // Update the subtopic with the new or existing thumbnail
        $subtopic->update($data);

        // Redirect with a success message
        return redirect()->route('admin.subtopics.index')->with('message', 'Subtopic updated successfully!');
    }

    public function destroy($id)
    {
        $subtopic = Subtopic::findOrFail($id);
        $subtopic->delete();
        return redirect()->route('admin.subtopics.index')->with('message', 'Subtopic Deleted successfully!');
    }

}

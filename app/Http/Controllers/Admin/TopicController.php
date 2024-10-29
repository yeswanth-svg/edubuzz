<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::with('subject')->get();
        return view('admin.topics.topics_list', compact('topics'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('admin.topics.add_topics', compact('subjects'));
    }



    public function store(Request $request)
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate the image file
        ]);

        // Create a slug from the name
        $data['slug'] = Str::slug($data['name']);

        // Define the path for thumbnails within the public folder
        $thumbnailPath = 'build/topics_thumbnails';

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
        $topic = Topic::create($data);

        // Redirect with a success message
        return redirect()->route('admin.topics.index')->with('message', 'Topic created successfully!');
    }




    public function edit($id)
    {
        $topic = Topic::with('subject')->findOrFail($id);
        $subjects = Subject::all();
        return view('admin.topics.edit_topics', compact('topic', 'subjects'));
    }



    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate only if a new image is uploaded
        ]);

        // Find the topic by ID or throw a 404 if not found
        $topic = Topic::findOrFail($id);

        // Update the slug if the name has changed
        $data['slug'] = Str::slug($data['name']);

        // Handle the thumbnail image update
        if ($request->hasFile('thumbnail')) {
            // Define the path for thumbnails within the public folder
            $thumbnailPath = 'build/topics_thumbnails';

            // Check if the directory exists in the public folder, if not, create it
            if (!File::exists(public_path($thumbnailPath))) {
                File::makeDirectory(public_path($thumbnailPath), 0755, true);
            }

            // Delete the old thumbnail if it exists
            if ($topic->thumbnail && File::exists(public_path($topic->thumbnail))) {
                File::delete(public_path($topic->thumbnail));
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
            $data['thumbnail'] = $topic->thumbnail;
        }

        // Update the topic with the new or existing thumbnail
        $topic->update($data);

        // Redirect with a success message
        return redirect()->route('admin.topics.index')->with('message', 'Topic updated successfully!');
    }


    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();
        return redirect()->route('admin.topics.index')->with('message', 'Topic deleted successfully!');
    }
}

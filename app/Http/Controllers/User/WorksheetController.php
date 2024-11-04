<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Worksheet;
use Illuminate\Http\Request;

class WorksheetController extends Controller
{
    //
    public function grades_pages()
    {
        $grades = Grade::all();
        return view('user.worksheets_grades', compact('grades'));
    }

    public function subjects_pages()
    {
        $subjects = Subject::select('name')->distinct()->get();
        return view('user.worksheets_subjects', compact('subjects'));
    }

    public function topics_pages()
    {
        // Fetch topics with their subjects
        $topics = Topic::with('subject')->get();

        // Deduplicate based on topic name
        $uniqueTopics = $topics->unique('name')->values();
        return view('user.worksheets_topics', compact('uniqueTopics'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search logic, you can customize this according to your database structure
        $results = Worksheet::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->get();

        return view('user.search_results', compact('results', 'query'));
    }

}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Topic;
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
}

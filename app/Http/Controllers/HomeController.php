<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Fetch topics with their subjects
        $topics = Topic::with('subject')->get();

        // Deduplicate based on topic name
        $uniqueTopics = $topics->unique('name')->values();

        return view('user.welcome', compact('uniqueTopics'));

    }
    public function about()
    {
        return view('user.about'); // Make sure this matches the name of your view file
    }



    public function contact()
    {
        return view('user.contact'); // Make sure this matches the name of your view file
    }
    public function policy()
    {
        return view('user.policy'); // Make sure this matches the name of your view file
    }
    public function worksheets()
    {
        // Fetch topics with their subjects
        $topics = Topic::with('subject')->get();

        // Deduplicate based on topic name
        $uniqueTopics = $topics->unique('name')->values();

        return view('user.worksheets', compact('uniqueTopics'));
    }

}

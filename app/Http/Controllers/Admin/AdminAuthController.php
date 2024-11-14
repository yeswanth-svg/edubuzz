<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Subtopic;
use App\Models\Worksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminAuthController extends Controller
{


    //
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $total_grades = Grade::count();
        $total_subjects = Subject::count();
        $total_topics = Topic::count();
        $total_subtopics = Subtopic::count();
        $total_worksheets = Worksheet::count();

        // Get the number of topics per subject
        $subjectsOverview = Subject::withCount('topics')->get()->map(function ($subject) {
            return [
                'name' => $subject->name,
                'topic_count' => $subject->topics_count
            ];
        });

        // Get the number of subtopics per topic
        $topicsOverview = Topic::withCount('subtopics')->get()->map(function ($topic) {
            return [
                'name' => $topic->name,
                'subtopic_count' => $topic->subtopics_count
            ];
        });

        // Get the number of worksheets per subtopic
        $subtopicsOverview = Subtopic::withCount('worksheets')->get()->map(function ($subtopic) {
            return [
                'name' => $subtopic->name,
                'worksheet_count' => $subtopic->worksheets_count
            ];
        });

        return view('admin.dashboard', compact(
            'total_grades',
            'total_subjects',
            'total_topics',
            'total_subtopics',
            'total_worksheets',
            'subjectsOverview',
            'topicsOverview',
            'subtopicsOverview'
        ));
    }

    public function showResetForm()
    {
        return view('admin.auth.reset');
    }

    public function reset(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No account found with this email address.']);
        }

        // Update the password
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        // Return a success response
        return back()->with('success', 'Password updated successfully');
    }



}

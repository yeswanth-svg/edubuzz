<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Grade;
use App\Models\Subtopic;
use App\Models\Worksheet;

class RoutingController extends Controller
{
    //
    public function through_grades($grade_slug)
    {
        $grade = Grade::where('slug', $grade_slug)->first();

        if (!$grade) {
            return abort(404, 'Grade not found');
        }

        $subjects = Subject::with('topics')->where('grade_id', $grade->id)->get();

        return view('user.routing.through_grades', [
            'subjects' => $subjects,
            'grade_name' => $grade->name,
            'grade_id' => $grade->id,
        ]);
    }


    public function through_grades_topic($topic_id)
    {
        // Retrieve the topic based on the given topic_id
        $topic = Topic::with(['subtopics.worksheets', 'subject.grade'])->findOrFail($topic_id);

        // Get subtopics for the given topic
        $subtopics = $topic->subtopics;

        // Get the topic name
        $topicName = $topic->name;

        // Get the subject and grade details
        $subject = $topic->subject;
        $grade = $subject->grade; // Assuming each subject belongs to one grade

        // Get unique topics across all subjects
        $topics = Topic::with('subject')->get();
        $uniqueTopics = $topics->unique('name')->values();

        // Retrieve worksheets from subtopics
        $worksheets = $subtopics->flatMap(function ($subtopic) {
            return $subtopic->worksheets; // Accessing worksheets through subtopics
        });

        // Pass all data to the view
        return view('user.routing.through_grades_topic', compact('topic_id', 'topicName', 'subtopics', 'subject', 'grade', 'uniqueTopics', 'worksheets'));
    }





    public function through_grades_topic_subtopics($subtopic_id)
    {
        // Retrieve the subtopic based on the given subtopic_id
        $subtopic = Subtopic::with('worksheets')->findOrFail($subtopic_id);

        // Get the subtopic name
        $subtopicName = $subtopic->name;

        // Get the topic details
        $topic = $subtopic->topic;

        // Check if the topic exists
        if (!$topic) {
            abort(404, 'Topic not found.');
        }

        // Get the subject associated with the topic
        $subject = $topic->subject;

        // Check if the subject exists
        if (!$subject) {
            abort(404, 'Subject not found.');
        }

        // Get the grade associated with the subject
        $grade = $subject->grade;

        // Check if the grade exists
        if (!$grade) {
            abort(404, 'Grade not found.');
        }

        // Paginate worksheets for the current subtopic (16 items per page)
        $worksheets = $subtopic->worksheets()->paginate(16);

        // Get related worksheets from other subtopics under the same topic
        $relatedWorksheets = Worksheet::whereIn('id', function ($query) use ($topic) {
            $query->select('worksheets.id')
                ->from('subtopics')
                ->join('worksheets', 'subtopics.id', '=', 'worksheets.subtopic_id')
                ->where('subtopics.topic_id', $topic->id);
        })->get();

        // Get all topics for all subjects
        $topics = Topic::with('subject')->get();

        // Deduplicate based on topic name
        $uniqueTopics = $topics->unique('name')->values();

        // Pass all data to the view
        return view('user.routing.through_grades_topic_subtopic', compact(
            'subtopic_id',
            'subtopicName',
            'worksheets',
            'relatedWorksheets',
            'topic',
            'subject',
            'grade',
            'uniqueTopics'
        ));
    }


    public function through_grades_topic_subtopic_worksheets($worksheet_id)
    {
        // Fetch the worksheet including its relationships
        $worksheet = Worksheet::with('subtopic.topic.subject')->findOrFail($worksheet_id);

        // Get the related subtopic, topic, and subject information
        $subtopic = $worksheet->subtopic; // This should correctly reference the subtopic
        $topic = $subtopic->topic; // This retrieves the related topic from the subtopic
        $subject = $topic->subject; // This retrieves the related subject from the topic
        $currentGradeId = $subject->grade_id; // Get the current worksheet's subject's grade ID


        // Fetch related worksheets based on the same topic across all grades
        $relatedWorksheets = Worksheet::whereHas('subtopic.topic', function ($query) use ($topic) {
            $query->where('topics.id', $topic->id); // Match the topic ID
        })->get();

        // Fetch remaining worksheets from the same subtopic (if needed)
        $remainingWorksheets = Worksheet::where('subtopic_id', $worksheet->subtopic_id)
            ->where('id', '!=', $worksheet_id) // Exclude the current worksheet
            ->get();

        // Pass the data to the view
        return view('user.routing.through_grades_topic_subtopic_worksheet', compact('worksheet', 'subtopic', 'relatedWorksheets', 'remainingWorksheets'));
    }


    //routed of the through worksheets with subjects

    public function through_worksheets_by_subjects($subject)
    {
        // Get all grades with their subjects and topics
        $grades = Grade::with(['subjects.topics'])->get();

        // Filter the grades to include only those that have the specified subject
        $filteredGrades = $grades->filter(function ($grade) use ($subject) {
            return $grade->subjects->contains('name', ucfirst($subject)); // Using ucfirst to match the format
        });

        // Further filter subjects to show only those related to the specified subject
        foreach ($filteredGrades as $grade) {
            $grade->subjects = $grade->subjects->filter(function ($subj) use ($subject) {
                return $subj->name === ucfirst($subject); // Using ucfirst to match the format
            });
        }

        return view('user.routing.through_worksheets_by_subjects', compact('filteredGrades', 'subject'));
    }





    public function through_worksheets_by_topics($topic_id)
    {
        // Retrieve the topic based on the given topic_id
        $topic = Topic::with(['subtopics.worksheets', 'subject.grade'])->findOrFail($topic_id);

        // Get the topic name
        $topicName = $topic->name;

        // Get all topics that have the same name (across all grades)
        $topicsWithSameName = Topic::with(['subtopics.worksheets', 'subject.grade'])
            ->where('name', $topicName)
            ->get();

        // Collect all subtopics and worksheets for topics with the same name
        $subtopics = $topicsWithSameName->flatMap(function ($t) {
            return $t->subtopics; // Accessing subtopics across all topics with the same name
        });

        // Collect worksheets from the subtopics
        $worksheets = $subtopics->flatMap(function ($subtopic) {
            return $subtopic->worksheets; // Accessing worksheets through subtopics
        });

        // Get unique topics across all subjects
        $topics = Topic::with('subject')->get();
        $uniqueTopics = $topics->unique('name')->values();

        // Pass all data to the view
        return view('user.routing.through_worksheets_by_topics', compact('topic_id', 'topicName', 'subtopics', 'uniqueTopics', 'worksheets'));
    }

























}

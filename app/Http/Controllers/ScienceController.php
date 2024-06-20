<?php

namespace App\Http\Controllers;

use App\Models\Science;
use App\Models\Topic;
use App\Models\Lesson;


use Illuminate\Http\Request;

class ScienceController extends Controller
{
    function index() {
        $sciences = Science::all();
        return view('sciences', ['sciences' => $sciences]);
    }

    function topics_by_science($name) {
        $science = Science::where('name', $name)->first();
        $topics = Topic::where('science_id', $science->id)->get();
        return view('topics', ['topics' => $topics, 'science' => $science]);
    }

    function lessons_by_topic($science_name, $topic_name) {
        $science = Science::where('name', $science_name)->first();
        $topic = Topic::where('science_id', $science->id)->where('name', $topic_name)->first();  
        $lessons = Lesson::where('topic_id', $topic->id)->get();
        return view('lessons', ['lessons' => $lessons, 'topic' => $topic, 'science' => $science]);
    }

    function show_lesson($science_name, $topic_name, $lesson_name) {
        $science = Science::where('name', $science_name)->first();
        $topic = Topic::where('science_id', $science->id)->where('name', $topic_name)->first();  
        $lesson = Lesson::where('topic_id', $topic->id)->where('name', $lesson_name)->first();
        return view('show_lesson', ['lesson' => $lesson, 'topic' => $topic, 'science' => $science]);
    }
}

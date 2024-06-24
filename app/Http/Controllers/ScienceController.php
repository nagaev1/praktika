<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;

use App\Models\Science;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\Mark;


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
        $marks = collect();
        if (auth()->check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);
            $marks = Mark::where('user_id', $userId)->get();            
        }
        $science = Science::where('name', $science_name)->first();
        $topic = Topic::where('science_id', $science->id)->where('name', $topic_name)->first();  
        $lessons = Lesson::where('topic_id', $topic->id)->get();
        return view('lessons', ['lessons' => $lessons, 'topic' => $topic, 'science' => $science, 'marks' => $marks]);
    }

    function show_lesson($science_name, $topic_name, $lesson_name) {
        $science = Science::where('name', $science_name)->first();
        $topic = Topic::where('science_id', $science->id)->where('name', $topic_name)->first();  
        $lesson = Lesson::where('topic_id', $topic->id)->where('name', $lesson_name)->first();
        return view('show_lesson', ['lesson' => $lesson, 'topic' => $topic, 'science' => $science]);
    }

    function store_mark($science_name, $topic_name, $lesson_name, Request $request) {
        $answers = $request->all();
        array_shift($answers);
        $points = 0.01;
        foreach ($answers as $answer) {
            if ($answer) {
                $points = $points + 1;
            }
        }
        $mark = 2;
        $points = $points / count($answers);
        if ($points > 0.5) {
            $mark = 3;
        }
        if ($points > 0.7) {
            $mark = 4;
        }
        if ($points >= 0.9) {
            $mark = 5;
        }

        $lesson = Lesson::where('name', $lesson_name)->first();
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $mark_obj = Mark::where('user_id', $userId)->where('lesson_id', $lesson->id)->first();
        if (empty($mark_obj)) {
            $mark = Mark::create([
                'user_id' => $userId,
                'lesson_id' => $lesson->id,
                'mark' => $mark
            ]);
        } else {
            $mark_obj->fill(['mark' => $mark])->save();
        }

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Dict;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Theme;
use App\Models\Topic;
use App\Models\TopicPdf;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_section($id){
        $themes = Theme::where('section_id', $id)->get();
        return view('user.section', ['themes' => $themes, 'id' => $id]);
    }

    public function show_theme($theme_id){
        $theme = Theme::find($theme_id);
        $test = Quiz::with('answers')->where('theme_id', $theme_id)->get();
        $audio = Audio::where('theme_id', $theme_id)->first();
        $questions = Question::where('theme_id', $theme_id)->get();
//        return $test;
        $dict = Dict::where('theme_id', $theme_id)->get();
        $topicPdf = TopicPdf::where('theme_id', $theme_id)->first();
        return view('user.show_theme', ['audio' => $audio,'theme' => $theme,'quizzes' => $test,'questions' => $questions, 'topic' => $topicPdf, 'audio' => $audio, 'dicts' => $dict]);
    }

    public function rebus_check(Request $request){
        $rebus = Question::find($request->rebus_id);
        if ($rebus->answer == strtolower($request->answer)){
            return back()->with('answer',1);
        }
        else{
            return back()->with('answer',0);
        }
    }

    public function check(Request $request){
        $correct = 0;
        $incorrect = 0;
        $r = [];
        for ($x = 1; $x <= $request->quiz_count; $x++) {
            $index = 'answer'.$x;
            if (isset($request->$index)){
                if ($request[$index] == '1'){
                    $correct = $correct+1;
                }
                else{
                    $incorrect = $incorrect+1;
                }
            }
        }
        session()->flash('result',1);
        session()->flash('correct',$correct);
        session()->flash('incorrect',$incorrect);
        return back();
    }
}

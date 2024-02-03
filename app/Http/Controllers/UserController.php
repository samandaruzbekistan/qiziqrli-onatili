<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Dict;
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
//        $test = Quiz::with('answers')->where('theme_id', $theme_id)->get();
        $audio = Audio::where('theme_id', $theme_id)->first();
        $dict = Dict::where('theme_id', $theme_id)->get();
        $topicPdf = TopicPdf::where('theme_id', $theme_id)->first();
        return view('user.show_theme', ['theme' => $theme, 'topic' => $topicPdf, 'audio' => $audio, 'dicts' => $dict]);
    }
}

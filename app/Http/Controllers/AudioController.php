<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Theme;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function view_audios($theme_id){
        $theme = Theme::find($theme_id);
        $questions = Audio::where('theme_id', $theme_id)->get();
        return view('admin.view_audios', ['audios' => $questions, 'theme' => $theme]);
    }

    public function add_audio(Request $request){
        $request->validate([
            'theme_id' => 'required|numeric',
            'audio' => 'required|file',
        ]);

        $photo = $request->file('audio')->extension();
        $name = md5(microtime());
        $photo_name = $name.".".$photo;
        $path = $request->file('audio')->move('audio/',$photo_name);

        $q = new Audio;
        $q->name = $photo_name;
        $q->theme_id = $request->theme_id;
        $q->save();
        return back()->with('success',1);
    }

    public function delete_audio($id){
        $question = Audio::find($id);
        unlink('audio/'.$question->name);
        Audio::where('id', $id)->delete();
        return back()->with('delete',1);
    }
}

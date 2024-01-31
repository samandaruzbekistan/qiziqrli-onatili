<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Theme;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function view_questions($theme_id){
        $theme = Theme::find($theme_id);
        $questions = Question::where('theme_id', $theme_id)->get();
        return view('admin.view_questions', ['questions' => $questions, 'theme' => $theme]);
    }

    public function add_question(Request $request){
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'theme_id' => 'required|numeric',
            'photo' => 'required|file',
        ]);

        $photo = $request->file('photo')->extension();
        $name = md5(microtime());
        $photo_name = $name.".".$photo;
        $path = $request->file('photo')->move('img/question/',$photo_name);

        $q = new Question;
        $q->question = $request->question;
        $q->answer = strtolower($request->answer);
        $q->photo = $photo_name;
        $q->theme_id = $request->theme_id;
        $q->save();
        return back()->with('success',1);
    }

    public function delete_question($id){
        $question = Question::find($id);
        unlink('img/question/'.$question->photo);
        Question::where('id', $id)->delete();
        return back()->with('delete',1);
    }
}

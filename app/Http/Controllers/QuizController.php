<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Quiz;
use App\Models\Theme;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function add_quiz(Request $request){
        $request->validate([
            'quiz' => 'required|string',
            'answer_a' => 'required|string',
            'answer_b' => 'required|string',
            'answer_c' => 'required|string',
            'answer_d' => 'required|string',
            'theme_id' => 'required|numeric',
        ]);

        $quiz = new Quiz;
        $quiz->quiz = $request->quiz;
        $quiz->theme_id = $request->theme_id;
        $quiz->save();

        $saved_id = $quiz->id;

        $this->add_answer($request->answer_a, $saved_id, 1);
        $this->add_answer($request->answer_b, $saved_id, 0);
        $this->add_answer($request->answer_c, $saved_id, 0);
        $this->add_answer($request->answer_d, $saved_id, 0);

        return back()->with('success', 1);
    }

    protected function add_answer($answerText, $quiz_id, $is_correct){
        $answer = new Answer;
        $answer->answer = $answerText;
        $answer->quiz_id = $quiz_id;
        $answer->is_correct = $is_correct;
        $answer->save();
    }


    public function show_quizzes($theme_id){
        $theme = Theme::find($theme_id);
        $quizzes = Quiz::with('answers')->where('theme_id', $theme_id)->get();
//        return $quizzes;
        return view('admin.view_theme_quizzes', ['theme' => $theme,'quizzes' => $quizzes, 'theme_id' => $theme_id]);
    }

    public function delete_quiz($quiz_id){
        Answer::where('quiz_id', $quiz_id)->delete();
        Quiz::where('id', $quiz_id)->delete();
        return back()->with('delete',1);
    }

}

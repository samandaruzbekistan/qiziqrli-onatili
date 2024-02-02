<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function new_topic(Request $request){
        $request->validate([
            'editor' => 'required|string',
            'theme_id' => 'required|numeric',
        ]);
        $dict = new Topic();
        $dict->html = $request->editor;
        $dict->theme_id = $request->theme_id;
        $dict->save();
        return back()->with('success',1);
    }

    public function show_theme_topics($theme_id){
        $theme = Theme::find($theme_id);
        $dicts = Topic::where('theme_id', $theme_id)->get();
        return view('admin.view_theme_topics', ['theme' => $theme,'topics' => $dicts, 'theme_id' => $theme_id]);
    }

    public function delete_topic($id){
        Topic::where('id', $id)->delete();
        return back()->with('delete',1);
    }

    public function imgSave(Request $request)
    {
        $file = $request->upload;
        $fileName = $file->getClientOriginalName();
        $new_name = time().$fileName;
        $dir = "topic/";
        $file->move($dir, $new_name);
        $url = asset('topic/'. $new_name);
        $CkeditorFuncNum = $request->input('CKEditorFuncNum');
        $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum', '$url', 'Fayl yuklandi')</script>";
        echo $status;

    }
}

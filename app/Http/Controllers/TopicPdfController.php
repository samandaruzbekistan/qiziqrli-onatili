<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Topic;
use App\Models\TopicPdf;
use Illuminate\Http\Request;

class TopicPdfController extends Controller
{
    public function new_topic(Request $request){
        $request->validate([
            'pdf' => 'required|file',
            'theme_id' => 'required|numeric',
        ]);
        $pdf_extension = $request->file('pdf')->extension();
        $name = md5(microtime());
        $pdf_name = $name.".".$pdf_extension;
        $path = $request->file('pdf')->move('pdf/',$pdf_name);
        $dict = new TopicPdf();
        $dict->pdf = $pdf_name;
        $dict->theme_id = $request->theme_id;
        $dict->save();
        return back()->with('success',1);
    }

    public function show_theme_topics($theme_id){
        $theme = Theme::find($theme_id);
        $dicts = TopicPdf::where('theme_id', $theme_id)->get();
        return view('admin.view_theme_topics', ['theme' => $theme,'pdfs' => $dicts, 'theme_id' => $theme_id]);
    }

    public function delete_topic($id){
        $pdf = TopicPdf::where('id', $id)->first();
        unlink('pdf/'.$pdf->pdf);
        TopicPdf::where('id', $id)->delete();
        return back()->with('delete',1);
    }
}

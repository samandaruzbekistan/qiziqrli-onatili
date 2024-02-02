<?php

namespace App\Http\Controllers;

use App\Models\Dict;
use App\Models\Theme;
use Illuminate\Http\Request;

class DictController extends Controller
{
    public function new_dict(Request $request){
        $request->validate([
            'english' => 'required|string',
            'uzbek' => 'required|string',
            'theme_id' => 'required|numeric',
        ]);
        $dict = new Dict;
        $dict->english = $request->english;
        $dict->uzbek = $request->uzbek;
        $dict->theme_id = $request->theme_id;
        $dict->save();
        return back()->with('success',1);
    }

    public function show_theme_dicts($theme_id){
        $theme = Theme::find($theme_id);
        $dicts = Dict::where('theme_id', $theme_id)->get();
        return view('admin.view_theme_dicts', ['theme' => $theme,'dicts' => $dicts, 'theme_id' => $theme_id]);
    }

    public function delete_dict($dict_id){
        Dict::where('id', $dict_id)->delete();
        return back()->with('delete',1);
    }
}

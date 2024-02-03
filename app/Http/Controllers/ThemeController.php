<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function add_section(Request $request){
        $request->validate([
            'name' => 'required|string'
        ]);
        $theme = new Theme;
        $theme->name = $request->name;
        $theme->subtitle = $request->subtitle;
        $theme->section_id = $request->section_id;
        $theme->save();
        return back()->with('success',1);
    }
}

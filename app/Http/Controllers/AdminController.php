<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Theme;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //    Auth admin
    public function auth(Request $request){
        $request->validate([
            'username' => "required|string",
            'password' => "required|string",
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if (!empty($admin)){
            if ($admin->password == $request->password){
                session()->put('admin',1);
                session()->put('id',$admin->id);
                session()->put('fullname',$admin->fullname);
                return redirect()->route('admin.profile');
            }
            else{
                return back()->with("login_error",1);
            }
        }
        else{
            return back()->with("login_error",1);
        }
    }

    public function logout(){
        session()->flush();
        return redirect()->route('admin.login');
    }

    public function update_password(Request $request){
        if ($request->password1 != $request->password2){
            return back()->with('logic_error',1);
        }
        else{
            $admin = Admin::find(session('id'));
            $admin->password = $request->password1;
            $admin->save();
            return back()->with('success',1);
        }
    }

    public function section($id){
        session()->put('section','qism'.$id);
        $themes = Theme::where('section_id', $id)->get();
        return view('admin.view_section', ['themes' => $themes, 'section_id' => $id]);
    }


}

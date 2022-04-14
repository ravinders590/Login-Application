<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function loginAdmin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $super_admin = Admin::where(['username'=>$request->username,'password'=>md5($request->password)])->count();
        
        if($super_admin > 0){
            $admin_data = Admin::where(['username'=>$request->username,'password'=>md5($request->password)])->get();
            session(['username'=>$request->username]);
            return redirect('admin');
        }else{
            return back()->with('fail','You are Not Logged in!!');
        }
        
    }
    public function dashboard(){
         return view('admin.admin');
    }
    public function loginPage(){
        return view('admin.login');
    }
    public function logout(){
        // echo "Lgout";
        session()->forget(['username']);
        return redirect('/');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('backend.admin.auth.admin-login');
    }

    public function adminCreate(Request $request)
    {
       $admin = Admin::where('email',$request->email)->first();
       if(!$admin){
        return redirect()->back()->with('error','Email or Password are not match.');
       }else{
        return redirect('/admin/dashboard');
       }
    }

    public function adminDashboard()
    {
        return view('backend.admin.home.index');
    }

    public function adminLogout()
    {
        session()->flush();
        return redirect('/');
    }
}

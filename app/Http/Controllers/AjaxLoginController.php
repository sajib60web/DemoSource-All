<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
// session_start();
class AjaxLoginController extends Controller 
{
    public function index()
    {
    	return view('ajax-login.ajax-login');
    }

    public function ajaxLoginCheck(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $admin = DB::table('admins')
                ->where('admin_email', $admin_email)
                ->where('admin_password', $admin_password)
                ->first();
        if ($admin) {
        	// Session::flash('message', 'User Login Successfully');
            Session::put('adminid', $admin->id);
            Session::put('admin_name', $admin->admin_name);
            Session::put('admin_name', $admin->admin_email);
            echo "success";
            // return Redirect::to('/dashboard');
        } else {
        	echo "Your email or password is invalid";
        }
    }

    

}

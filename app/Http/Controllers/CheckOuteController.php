<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
session_start();

class CheckOuteController extends Controller
{ 	
	public function dashboard()
    {
    	return view('ajax-login.dashboard');
    }

    public function logout() {
        Session::put('admin_id', NULL);
        Session::put('admin_name', NULL);
        return Redirect::to('/ajax/login');
    }
}

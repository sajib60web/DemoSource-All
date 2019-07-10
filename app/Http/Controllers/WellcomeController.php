<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    
	public function index()
	{
		// return view('master');
		return view('contant.contant');
	}

	public function dynamicFild()
	{
		return view('dynamic-fild.dynamic-fild');
	}
}

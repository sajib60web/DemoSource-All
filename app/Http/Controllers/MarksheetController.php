<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
class MarksheetController extends Controller
{
    public function marksheet()
    {
    	return view('marksheet.marksheet');
    }

    public function createMarksheet(Request $request)
    {
    	// return $request->all();
     //    exit();
     	$data = array();
        $data['name'] = $request->name;
        $data['roll'] = $request->roll;
        $marksheet_id = DB::table('marksheet_info')->insertGetId($data);
        Session::put('marksheet_id', $marksheet_id);

        $sdata = array();
        $sdata['subject1'] = $request->subject1;
        $sdata['subject2'] = $request->subject2;
        $fourSubject = $request->fourSubject;
        foreach ($sdata as $key => $ans) {
	        if ($ans != '') {
                if ($fourSubject == $key) {
                    $data = array();
			        $data['marksheet_id'] = Session::get('marksheet_id');
			        $data['fourSubject'] = '1';
			        $data['subject'] = $ans;
			        $data['subNumber'] = $request->subNumber;
			        $data['letter'] = $request->subjectLetter;
			        $data['point'] = $request->subjectPoint;
			        DB::table('subject')->insert($data);
                } else {
                    $data = array();
			        $data['marksheet_id'] = Session::get('marksheet_id');
			        $data['fourSubject'] = '1';
			        $data['subject'] = $ans;
			        $data['subNumber'] = $request->subNumber;
			        $data['letter'] = $request->subjectLetter;
			        $data['point'] = $request->subjectPoint;
			        DB::table('subject')->insert($data);
                }
            }
        }
    }





}

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
     	$data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['sex'] = $request->sex;
        $student_id = DB::table('students')->insertGetId($data);
        //Session::put('student_id', $student_id);

        // if(Session::get('student_id') != 0){
        //     foreach($odata as $item => $v){
        //         $data2 = array(
        //             'student_id' => Session::get('student_id'),
        //             'subject_name' => $request->subject_name[$item]
        //         );
        //         DB::table('subject_info')->insert($data2);
        //     }
        // }
        // return back();
           //  $data = [];
           // $months['subject_name'] = $request->subject_name;
           

           //   foreach ($months as $values) {

           //      $data['subject_name'] = explode(",", $values);

           //      echo "<pre>";
           //      print_r($data);
            
           //    }

        foreach ($request->subject_name as $key => $value) {
            
            $data = array(
                'subject_name'=>$request->subject_name[$key]
            );
        return $data;
        }
    }

    // public function createMarksheet(Request $request)
    // {
    //     $data = array();
    //     $data['name'] = $request->name;
    //     $data['roll'] = $request->roll;
    //     $student_id = DB::table('students')->insertGetId($data);
    //     Session::put('student_id', $student_id);

    //     if (Session::get('student_id') != 0) {
    //         foreach ($variable as $key => $value) {
    //             $sdata = array(
    //                 'student_id' => Session::get('student_id'), 
    //             );
    //         }
    //     } 
    // }





}

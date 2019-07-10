<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Student;
class AjaxController extends Controller
{
    public function students()
    {
    	return view('students.students');
    }

    public function readData()
    {
    	$students = DB::table('students')
                ->get();
        // return Response($students);
         return view('students.studentList', compact('students'));
    }

    public function addStudent(Request $request)
    {
    	if ($request->ajax()) {
    		$data = array();
	        $data['first_name'] = $request->first_name;
	        $data['last_name'] = $request->last_name;
	        $data['sex'] = $request->sex;
	        $students = DB::table('students')
	        				->insert($data);
	        // $students = Student::create($request->all());
    		return response($students);
    	}

    }


    public function delete(Request $request)
    {
    	if ($request->ajax()) {
    		DB::table('students')
    				->where('id',$request->id)
    				->delete();
    	}

    }




}

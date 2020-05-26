<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegController extends Controller
{
    public function index(){

        return view('student.course.registration');
    }

    //register server
    public function register(Request $req){

        echo "reg msg!";
        // $data = array();
        // $data['student_id'] = $req->email;
        // $data['course_id'] = $req->course_id;
        // $data['student_name'] = $req->student_name;

        // $reg = DB::table('student_courses')->insert($data);
        //return response()->json($data);
        // if($reg){

        //     return redirect()->action('DashboardController@index')->with('success', 'Registration Completed Successfully!');
   
        // }else{
          
        //     return redirect()->action('DashboardController@index')->with('fail', 'Could Not Register!');
   
          
        // }
    }
}

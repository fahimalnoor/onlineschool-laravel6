<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function allcourses(){

        $allcourses = DB::table('courses')->get();
        return view('student.course.allcourses' , compact('allcourses'));
        //return response()->json($myposts);
    }


    public function mycourses(){

        $mycourses = DB::table('student_courses')->where('student_id', Auth::user()->email)->get();
        return view('student.course.mycourses' , compact('mycourses'));
        //return response()->json($myposts);
    }

    //course notes
    public function mynotes($id){

        $mynotes = DB::table('course_notes')->where('course_id', $id)->get();
        return view('student.course.mynotes' , compact('mynotes'));
        //return response()->json($myposts);
    }

    //course notes
    public function mynotices($id){

        $mynotices = DB::table('course_notices')->where('course_id', $id)->get();
        return view('student.course.mynotices' , compact('mynotices'));
        //return response()->json($myposts);
    }

    //course schedule
    public function schedule($id){

        $schedule = DB::table('course_schedules')->where('course_id', $id)->get();
        return view('student.course.schedule' , compact('schedule'));
        //return response()->json($myposts);
    }
    
     //course drop
     public function drop($id)
     {
         $drop = DB::table('student_courses')->where('course_id', $id)->where('student_id', Auth::user()->email)->delete();
         if($drop){
             return redirect()->action('DashboardController@index')->with('success', 'Course Dropped Successfully!');
         }else{
 
             echo "Drop Failed!";
         }
     }

}

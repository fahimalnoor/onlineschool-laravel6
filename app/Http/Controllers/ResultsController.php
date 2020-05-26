<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index(){

            $results = DB::table('student_courses')->where('student_id', Auth::user()->email)->get();
            return view('student.course.results' , compact('results'));
            //return response()->json($myposts);
    }

}

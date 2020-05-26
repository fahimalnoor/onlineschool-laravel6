<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BooksController extends Controller
{
    public function index(){

        //return view('student.books');
        $bookres = DB::table('books')->get();
        return view('student.books' , compact('bookres'));
 }

    //search for book
    public function search(Request $req){

        $search = $req->bookname;

        $bookres = DB::table('books')->where('book_name', 'like' , "%{$search}%")->get();
        return view('student.bookview' , compact('bookres'));

        //return response()->json($posts);

    }
}
 
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'], function(){
    Route::get('/', 'DashboardController@index');
    Route::post('/', 'DashboardController@updateAvatar');
    Route::get('/profile/edit/{id}', ['uses'=>'DashboardController@edit', 'as'=>'profile-edit']);
    Route::put('/profile/edit/{id}', ['uses'=>'DashboardController@update', 'as'=>'profile-update']);
    Route::post('/profile/edit/update', ['uses' => 'DashboardController@proup', 'as' => 'proup']); 


    //deleting my id
    Route::get('/profile/delete/{email}', 'DashboardController@delete');

    //books homepage
    Route::get('/books', 'BooksController@index');
    //book search
    Route::post('/books/booksearch', 'BooksController@search')->name('booksearch');
    
    //all courses
    Route::get('/allcourses', 'CourseController@allcourses');
    //my courses
    Route::get('/mycourses', 'CourseController@mycourses');
    //reg for course
    Route::get('/regcourseform', 'RegController@index');
    Route::post('/regcourse', 'RegController@register')->name('regcourse');


    //coursenotes
    Route::get('/mycoursenotes/{id}', 'CourseController@mynotes');
    //coursenotices
    Route::get('/mycoursenotices/{id}', 'CourseController@mynotices');
    //course schedules
    Route::get('/courseschedule/{id}', 'CourseController@schedule');

    //get results
    Route::get('/results', 'ResultsController@index');
    //drop a course
    Route::get('/courses/drop/{id}', 'CourseController@drop');


    Route::get('/course', 'Course\CourseController@index');
    Route::get('/course/create', 'Course\CourseController@create');
    Route::post('/course/store', 'Course\CourseController@store');
    Route::get('/course/edit/{id}', ['uses'=>'Course\CourseController@edit', 'as'=>'course-edit']);
    Route::put('/course/edit/{id}', ['uses'=>'Course\CourseController@update', 'as'=>'course-update']);
    Route::delete('/course/delete/{id}', ['uses'=>'Course\CourseController@destroy', 'as'=>'course-delete']);
});

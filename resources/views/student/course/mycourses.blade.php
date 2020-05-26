@extends('student.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Current Courses {{ Auth::user()->name }}</div>
                <div class="card-body">
                </div>    
            
                <h3>Your Registered Courses Here!</h3><br>

                        <table border="3">
                        <tr><th>Course ID</th><th>Course Name</th><th>Teacher Name</th><th>Notes</th>
                        <th>Notices</th><th>Schedule</th>
                        </tr>
                        @foreach($mycourses as $row)
                        <tr>
                        <td> {{ $row->course_id }} </td>
                        <td> {{ $row->course_name }} </td>
                        <td> {{ $row->teacher_name }} </td>
                        <td><a href="{{ url('/dashboard/mycoursenotes/'.$row->course_id) }}" 
                        class="btn btn-sn btn-success">Notes</a></td>
                        <td><a href="{{ url('/dashboard/mycoursenotices/'.$row->course_id) }}" 
                        class="btn btn-sn btn-info">Notices</a></td>
                        <td><a href="{{ url('/dashboard/courseschedule/'.$row->course_id) }}" 
                        class="btn btn-sn btn-info">Schedule</a></td>
                        </td>
                        </tr>
                        @endforeach
                        </table>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
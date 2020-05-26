@extends('student.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Which Courses Would You Like To Do,{{ Auth::user()->name }}?</div>
                <div class="card-body">
                </div>    
            
                <h3>All Current Courses Are Here!</h3><br>

                        <table border="3">
                        <tr><th>Course ID</th><th>Course Name</th><th>Curriculum</th>
                        <th>Description Link</th><th>Teacher Name</th><th>Teacher ID</th>
                        </tr>
                        @foreach($allcourses as $row)
                        <tr>
                        <td>&nbsp; {{ $row->c_id }} </td>
                        <td>&nbsp; {{ $row->c_name }} </td>
                        <td>&nbsp; {{ $row->c_curriculum }} </td>
                        <td>&nbsp; {{ $row->c_link}} </td>
                        <td>&nbsp; {{ $row->c_teacher_name }} </td>
                        <td>&nbsp; {{ $row->c_teacher_id }} </td>
                        </tr>
                        @endforeach
                        </table>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
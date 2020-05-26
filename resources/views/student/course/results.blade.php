@extends('student.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Result Sections {{ Auth::user()->name }}</div>
                <div class="card-body">
                </div>    
            
                <h3>Your Results Are Here!</h3><br>
                        <table border="3">
                        <tr><th>Course ID</th><th>Course Name</th><th>Result</th><th>Action</th>
                        </tr>
                       
                        @foreach($results as $row)
                        <tr>
                        <td>{{ $row->course_id }} &nbsp;</td>
                        <td>{{ $row->course_name }} &nbsp;</td>
                        <td>{{ $row->course_grade }} &nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('/dashboard/courses/drop/'.$row->course_id)}}" class="btn btn-sn btn-danger" >Drop It</a>
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
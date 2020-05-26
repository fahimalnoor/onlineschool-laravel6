@extends('student.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Course Schedule{{ Auth::user()->name }}!</div>
                <div class="card-body">
                </div>

                        <table border="3">
                        <tr><th>Course ID</th><th>Schedule</th>
                        </tr>
                        @foreach($schedule as $row)
                        <tr>
                        <td> {{ $row->course_id }} </td>
                        <td> {{ $row->schedule_time }} </td>
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
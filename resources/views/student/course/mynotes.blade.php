@extends('student.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Course Note {{ Auth::user()->name }}!</div>
                <div class="card-body">
                </div>

                        <table border="3">
                        <tr><th>Course ID</th><th>Course Name</th><th>Notes</th>
                        </tr>
                        @foreach($mynotes as $row)
                        <tr>
                        <td> {{ $row->course_id }} </td>
                        <td> {{ $row->course_name }} </td>
                        <td> {{ $row->course_notes }} </td>
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
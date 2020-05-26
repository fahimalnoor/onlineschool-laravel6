@extends('student.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register For A Course!</div>
                <div class="card-body">
                </div>    
                <form action="{{ route('regcourse') }}" method="post">
                    @csrf
                    <pre>
                    Your Email ID:   <input type="text" name="email" value="{{ Auth::user()->email }}" readonly/><br>
                    Enter Course ID: <input type="text" name="course_id" value="" required>
                    <input type="hidden" name="student_name" value="{{ Auth::user()->name }}" />
                    <input type="submit" name="submit" class="mt-2 btn btn-success" value="Register" />
                    </pre>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
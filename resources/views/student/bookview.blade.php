@extends('student.layout.master')
@section('content')

<div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All The Books Information Here!</strong>
                        </div>
                        <div class="card-body">

                        <h3>Your Books</h3><br>

                        <table border="3">
                        <tr><th>Book ID</th><th>Book Name</th><th>Download Link</th>
                        </tr>

                        @foreach($bookres as $row)
                        <tr>
                        <td>{{ $row->book_id }} &nbsp;</td>
                        <td>{{ $row->book_name }} &nbsp;</td>
                        <td>{{ $row->book_link }} &nbsp;</td>
                        </tr>
                        @endforeach
                        </table>    
                        </div>
                    </div> <!-- .card -->

                  </div>
</div>

@endsection
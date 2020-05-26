@extends('student.layout.master')
@section('content')

<div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All The Books Information Here!</strong>
                        </div>
                        <div class="card-body">

                
                        <form action="{{ route('booksearch') }}" method="post">
                        @csrf
                        <pre>
                        Enter A Book Name To Search:
                        <input type="text" name="bookname" value="" required> 
                        
                        <input type="submit" name="submit" class="mt-2 btn btn-primary" value="submit"  />
                        </pre>             
                        </form>
                        <hr>
                        <h3>All Book List</h3><br>

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
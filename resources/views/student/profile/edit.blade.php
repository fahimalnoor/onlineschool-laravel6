@extends('student.layout.master')
@section('content')

<div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Update Your Info!</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                @if(count($errors) > 0)
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                            @foreach($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                  <hr>

                  
                                  <form action="{{ route('proup') }}" method="post">
                                  @csrf
                                  <pre>
                                  Your Name: <input type="text" name="name" value="{{ $user->name }}" required>

                                  New Email: <input type="text" name="email" value="{{ $user->email }}" required>  
                                  <input type="submit" name="submit" class="btn btn-sn btn-info" value="Update" />
                                  </pre>
                                  </form>
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->

@endsection
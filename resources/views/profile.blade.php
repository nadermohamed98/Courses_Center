@extends('layouts.app')

@section('content')
    <h1>Profile Page</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading">Information</div>
                    <div class="panel-body">
                        <form class="form-horizontal " method="POST" action="register">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">Name :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->name}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">Email :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->email}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">Address :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-8 control-label ">{{Auth::user()->address}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">phone number :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->phonenumber}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">DateOfBirth :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">{{Auth::user()->DateOfBirth}}</label>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-6 control-label">You are a :</label>
                                <div class="col-md-6">
                                    <label for="name" class="col-left-4 control-label ">
                                        @if(Auth::user()->role_id == 3)
                                            <label>Student</label>
                                        @elseif(Auth::user()->role_id == 2)
                                            <label>Instructor</label>
                                        @else
                                            <label>Admin</label>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                            <a href="/users/{{Auth::user()->id}}/edit" class="btn btn-danger">Edite profile</a><br><br>
                            @if(Auth::user()->role_id == 1)
                            <a href="/users/create" class="btn btn-danger">Add</a>
                            <a href="#" class="btn btn-danger">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            @endif
                            </div>
                            <hr>
                            @include('inc.messages')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="well text-center"> 
        <h3>Add new user</h3>
        <a href="/users/create" class="btn btn-primary">Add</a>
    </div>
    <div class="well text-center"> 
        <h3>Add new course</h3>
        <a href="/course/create" class="btn btn-primary">Add</a>
    </div>
    <div class="well text-center"> 
        <h3>Add Course to teacher</h3>
        <a href="/teacher_course" class="btn btn-primary">Add</a>
    </div>
    <div class="well text-center"> 
        <h3>Add sallary for emoloyee</h3>
        <a href="/staff/create" class="btn btn-primary">Add</a>
    </div>
@endsection
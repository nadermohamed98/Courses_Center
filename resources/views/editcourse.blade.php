@extends('layouts.app')
@section('content')
    <h1>Edit information</h1>
    {!! Form::open(['action'=>['CoursesController@update',$course->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('coursename','Course Name')}} 
            {{Form::text('coursename',$course->course_name,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('coursecode','Course Code')}} 
            {{Form::text('coursecode',$course->course_code,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
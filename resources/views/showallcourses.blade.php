@extends('layouts.app')
@section('content')
    <h1>Courses</h1>
    @if (count($courses)>0)
        @foreach ($courses as $course)
            <div class="well">

                <h3>Course name : <b> {{$course->course_name}}</b></h3>
                <h3>Course code : <b>{{$course->course_code}}</b></h3>
                
                <hr>
                {!! Form::open(['action'=>['CoursesController@destroy',$course->id],'method'=>'POST'] )!!}
                {{Form::hidden('_method','DELETE')}}
                <a href="/course/{{$course->id}}/edit" class="btn btn-primary">Edit</a>
                {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                {!! Form::close() !!}
                
            </div>
        @endforeach
         
    @else
    <b>No users Found</b>  
    @endif
    @include('inc.messages')

@endsection
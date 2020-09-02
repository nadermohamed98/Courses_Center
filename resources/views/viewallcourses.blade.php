@extends('layouts.app')
@section('content')
    <h1>Courses</h1>
    @if (count($courses)>0)
        @foreach ($courses as $course)
            <div class="well">

                <h3>Course name : <b> {{$course->course_name}}</b></h3>
                <h3>Course code : <b>{{$course->course_code}}</b></h3>
            </div>
        @endforeach
    @else
    <b>No Courses Found</b>  
    @endif
    @include('inc.messages')

@endsection
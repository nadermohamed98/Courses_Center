@extends('layouts.app')
@section('content')
    <h1>Your grade in courses</h1>
    @include('inc.messages')
  @if (true)
    
        @foreach ($Student_courses as $Student_course  ) 
            
            @if ($Student_course->Student_id==Auth::user()->id)
            <div class="well">
                @php
                $result = DB::table('courses')->select('course_name')->where('id', $Student_course->course_id)->first();
                if ($Student_course->grade==NULL) {
                    $Student_course->grade="grade not found";
                }
                
                @endphp
                <h3>Course name : <b  class="text-primary"> {{$result->course_name}}</b></h3>
                <h3>Course garde : <b class="text-danger"> {{$Student_course->grade}}</b></h3>
            </div>
            @endif
        @endforeach
    @else
    <b>No grade to show</b>  
    @endif
    

@endsection 
@extends('layouts.app')
@section('content')
    <h1>Enrolled Courses</h1>
    @include('inc.messages')
  @if (count($courses)>0 && count($Student_Courses)>0)
    
        @foreach ($courses as $course  ) 
            @foreach ($Student_Courses as $Student_Course)
            
                @php

                
                 $items[] = $Student_Course->course_id
                @endphp
            @endforeach
          @if (in_array($course->id,$items) )
            <div class="well">
                <h3>Course Name : <b> {{$course->course_name}}</b></h3>
                <h3>Course Code : <b>{{$course->course_code}}</b></h3>

                {!! Form::open(['action'=>['Student_CoursesController@destroy',$course->id,],'method'=>'POST'] )!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
            @endif 
        @endforeach
    @else
    <b>No courses Found</b>  
    @endif
    

@endsection 
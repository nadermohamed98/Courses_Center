 @extends('layouts.app')
@section('content')
    <h1>Courses you can enroll in</h1>
    @include('inc.messages')
  @if (count($courses)>0 )
    
        @foreach ($courses as $course  ) 
            @foreach ($Student_Courses as $Student_Course)
                @if ($Student_Course->Student_id==Auth::user()->id)
                    
                
                @php
                    $items[] = $Student_Course->course_id
                @endphp
                @endif
            @endforeach
            @if (empty($items))
                
            @foreach ($courses as $course)
            <div class="well">
                <h3>Course name : <b> {{$course->course_name}}</b></h3>
                <h3>Course code : <b>{{$course->course_code}}</b></h3>
                {!! Form::open(['action'=>['Student_CoursesController@update',$course->id,],'method'=>'POST'] )!!}
                {{Form::hidden('_method','PUT')}}
                
                {{Form::submit('Enroll',['class'=>'btn btn-success'])}}
                
                {!! Form::close() !!}
            </div>
            @endforeach
                @break;
            @endif
            @if (!in_array($course->id,$items) )
            <div class="well">
                <h3>Course name : <b> {{$course->course_name}}</b></h3>
                <h3>Course code : <b>{{$course->course_code}}</b></h3>
                {!! Form::open(['action'=>['Student_CoursesController@update',$course->id,],'method'=>'POST'] )!!}
                {{Form::hidden('_method','PUT')}}
                
                {{Form::submit('Enroll',['class'=>'btn btn-success'])}}
                
                {!! Form::close() !!}
            </div>
            @endif
        @endforeach
    @else
    <b>No courses Found</b>  
    @endif
    

@endsection 
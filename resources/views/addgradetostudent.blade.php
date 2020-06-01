@extends('layouts.app')
@section('content')
@include('inc.messages')
    <h1>Students</h1>
        @if (count($Student_Courses)>0)
             @php 
                $teacher_id=DB::table('teacher_courses')->where('teacher_id', auth::user()->id)->value('teacher_id');
                $course_id = DB::table('teacher_courses')->where('teacher_id', auth::user()->id)->value('course_id');
              @endphp
            @foreach ($Student_Courses as $Student_Course)
                @if ( $Student_Course->course_id ==$course_id && $Student_Course->grade==NULL)
                <form class="form-horizontal" method="GET" action="{{action('Student_CoursesController@addgrade',$Student_Course->Student_id)}}">
                    {{ csrf_field() }}
                    <div class="well">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <label for="name" class="col-md-1 control-label">{{DB::table('users')->where('id',$Student_Course->Student_id)->value('name')}}</label>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="course_name" class="col-md-4 control-label">course name</label>
                        <label for="course_name" class="col-md-1 control-label">{{DB::table('courses')->where('id',$Student_Course->course_id)->value('course_name')}}</label>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="course_id" class="col-md-4 control-label" hidden>course id</label>
                        <input name="course_id" class="col-md-1 control-label" value="{{$Student_Course->course_id}}" hidden>
                    </div>
                    <div class="form-group{{ $errors->has('sallary') ? ' has-error' : '' }}">
                        <label for="grade" class="col-md-4 control-label">grade</label>
                        <input id="grade" type="text" class="" name="grade" placeholder="" >
                    </div>
                    
                    
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add grade
                            </button>
                        </div>
                    </div>
                </div>
                </form>
    
             
                     
                @endif

            @endforeach
        @else
        <b>No student Found</b>  
        @endif
   

@endsection


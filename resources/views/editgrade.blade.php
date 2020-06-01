@extends('layouts.app')
@section('content')
@include('inc.messages')
    <h1>Edit grade</h1>
    @php
     
                $course_id=DB::table('teacher_courses')->where('teacher_id', auth::user()->id)->value('course_id');
                $s = DB::table('teacher_courses')->where('teacher_id', auth::user()->id)->value('course_id');/*
                $S_name=DB::table('users')->where($Student_Course->Student_id, auth::user()->id)->value('name');*/
    @endphp
    @if (count($Student_Courses) >0)
        
    
    @foreach ($Student_Courses as $Student_Course)
    @if ($Student_Course->course_id==$course_id )
    <div class="well">
        {!! Form::open(['action'=>['Student_CoursesController@store',$Student_Course->Student_id],'method'=>'POST', 'class' => 'form-horizontal']) !!}
        {!! Form::text('c_id', $Student_Course->course_id, ['class' => 'hidden']) !!}
        {!! Form::text('s_id', $Student_Course->Student_id, ['class' => 'hidden']) !!}
            <div class="form-group">
                {!! Form::label('Student_name', 'Student name:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-5">
                    {!! Form::label('Student_name', DB::table('users')->where('id',$Student_Course->Student_id )->value('name'), ['class' => 'col-lg-2 control-label']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('course_id', 'course id:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-5">
                    {!! Form::label('course_id',DB::table('courses')->where('id', $course_id)->value('course_name'), ['class' => 'col-lg-2 control-label'], ['class' => 'col-lg-2 control-label']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('grade', 'Grade:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-2">
                    {!! Form::text('grade', $Student_Course->grade, ['class' => 'form-control']) !!}
                </div>
            </div>
            
            
            {{Form::submit('Edit',['class'=>'btn btn-primary',])}}
        {!! Form::close() !!}
    </div>
    @endif
    @endforeach
    @else
    <b>not found</b>
    @endif
@endsection
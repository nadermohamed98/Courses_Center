@extends('layouts.app')
@section('content')
@include('inc.messages')

    <h1>Teachers</h1>
    @if (count($users)>0)
        @foreach ($users as $user)
            @if ($user->role_id==2)
            <form class="form-horizontal" method="POST" action="{{action('Teacher_CoursesController@store')}}">
                {!! csrf_field() !!}
                <div class="well">
                    <h2>E-mail :  <b>{{$user->email}}</b></h2>
                    <h2>Name : <b>{{$user->name}}</b></h2>
                    <input type="text" name="id" value="{{$user->id}}" hidden>
                    <h2>course : 
                    <select name="courses" id="courses">
                        @if(count($courses)>0)
                            @foreach ($courses as $course)

                                <option name="course" value="{{$course->id}}">{{$course->course_name}}</option>
                            @endforeach
                        @else 
                            <option>No courses available now</option>
                        @endif
                    </select>
                    </h2>
                    <h2>course date : 
                        <select name="date" id="date">
                            <option  value="Spring">Spring</option>
                            <option  value="Summer">Summer</option>
                        </select>
                        </h2>
                    <button type="submit" class="btn btn-primary">
                        Add course to teacher
                    </button>
                </div> 
            </form>    
            @endif
        @endforeach
    @else
    <b>No users Found</b>
    @endif

@endsection
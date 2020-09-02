@extends('layouts.app')
@section('content')
@include('inc.messages')

    <h1>Users</h1>
    @if (count($users)>1)
        @foreach ($users as $user)
            @if ($user->id!=Auth::user()->id)
                <div class="well">
                    <h2>Name : <b>{{$user->name}}</b></h2>
                    <h2>E-mail :  <b>{{$user->email}}</b></h2>
                    <h2>
                        Role : @if($user->role_id == 2)<b>Instructor</b>
                        @elseif($user->role_id == 3)<b>Student</b>
                        @else<b>Admin</b>
                        @endif
                    </h2>
                    <hr>
                    {!! Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST'] )!!}
                    {{Form::hidden('_method','DELETE')}}
                    <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                    {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                    {!! Form::close() !!}
                </div>
            @endif
        @endforeach
        
            
    @else
    <b>No users Found</b>
    @endif

@endsection
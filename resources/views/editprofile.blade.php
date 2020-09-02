@extends('layouts.app')
@section('content')
    <h1>Edit information</h1>
    {!! Form::open(['action'=>['UsersController@update',$user->id],'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('image','Image')}} 
            {{Form::file('image_path')}}
        </div>
        <div class="form-group">
            {{Form::label('name','Name')}} 
            {{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}} 
            {{Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}} 
            {{Form::password('password', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('DateOfBirth','Date Of Birth')}} 
            {{Form::text('DateOfBirth',$user->DateOfBirth,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}} 
            {{Form::text('address',$user->address,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('phonenumber','Phonenumber')}} 
            {{Form::text('phonenumber',$user->phonenumber,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
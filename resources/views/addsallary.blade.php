@extends('layouts.app')
@section('content')
@include('inc.messages')

    <h1>Users</h1>
    @if (count($users)>0)
        @foreach ($users as $user)
            @foreach ($Staffs as $Staff)
                @php
                    $items[] = $Staff->staff_id
                @endphp
            @endforeach
            @if($user->id!=Auth::user()->id && empty($items) && $user->id !=3)
            <form class="form-horizontal" method="POST" action="{{action('StaffsController@store')}}">
                {{ csrf_field() }}
                <div class="well">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>
                    <label for="name" class="col-md-1 control-label">{{$user->name}}</label>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-mail</label>
                    <label for="email" class="col-md-1 control-label">{{$user->email}}</label>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="id" type="text" class="" name="id" value="{{$user->id}}" hidden >
                    
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="role_id" type="text" class="" name="role_id" value="{{$user->role_id}}" hidden >
                    
                </div>
                <div class="form-group{{ $errors->has('sallary') ? ' has-error' : '' }}">
                    <label for="salary" class="col-md-4 control-label">Salary</label>
                    <input id="salary" type="text" class="" name="salary" placeholder="" >
                </div>
                
                
                 <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Add sallary
                        </button>
                    </div>
                </div>
            </div>
            </form>

            @elseif ($user->id!=Auth::user()->id && !in_array($user->id,$items)&& $user->id !=3  )
            <form class="form-horizontal" method="POST" action="{{action('StaffsController@store')}}">
                {{ csrf_field() }}
                <div class="well">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>
                    <label for="name" class="col-md-1 control-label">{{$user->name}}</label>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-mail</label>
                    <label for="email" class="col-md-1 control-label">{{$user->email}}</label>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="id" type="text" class="" name="id" value="{{$user->id}}" hidden >
                    
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="role_id" type="text" class="" name="role_id" value="{{$user->role_id}}" hidden >
                    
                </div>
                <div class="form-group{{ $errors->has('sallary') ? ' has-error' : '' }}">
                    <label for="salary" class="col-md-4 control-label">Salary</label>
                    <input id="salary" type="text" class="" name="salary" placeholder="" >
                </div>
                
                
                 <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Add sallary
                        </button>
                    </div>
                </div>
            </div>
            </form>
            
            @endif
        @endforeach
    @else
    <b>No users Found</b>
    @endif

@endsection
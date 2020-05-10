@extends('layouts.app')

@section('content')
    <h1>Profile Page</h1>
    <div class="well">
        <table>
             <tr>
            <td>username : </td>
            <td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
            <td>phone number : </td>	
            <td>{{Auth::user()->phonenumber}}</td>
            </tr> 
            <tr>
            <td>email : </td>
            <td>{{Auth::user()->email}}</td>
            </tr>
            <tr>
            <td>address : </td>	
            <td>{{Auth::user()->address}}</td>
            </tr>
            <tr>
            <td>date of birth : </td>	
            <td>{{Auth::user()->DateOfBirth}}</td>
            </tr>
            <tr>
            <td>you are a : </td>
            @if(Auth::user()->role_id == 3)
                <td>Student</td>
            @elseif(Auth::user()->role_id == 2)
                <td>Instructor</td>
            @else
                <td>Admin</td>
            @endif
            </tr>
        </table>
        <div class="btn">
            <div class="btn btn-danger">
                <a href="#" class="btn">View course</a>
            </div>
            <div class="btn btn-danger">
                <a href="#" class="btn">Edite profile</a>
            </div>
        </div>
    </div>
@endsection
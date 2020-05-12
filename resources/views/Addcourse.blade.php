@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Course</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{action('CoursesController@store')}}" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="coursename" class="col-md-4 control-label">Course name</label>

                            <div class="col-md-6">
                                <input id="coursename" type="text" class="form-control" name="coursename" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coursecode" class="col-md-4 control-label">Course code</label>

                            <div class="col-md-6">
                                <input id="coursecode" type="text" class="form-control" name="coursecode" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        
                        
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add New Course
                                </button>
                            </div>
                        </div>
                        @include('inc.messages')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

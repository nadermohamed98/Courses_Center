<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Teacher_course;
use App\Staff;

class Teacher_CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $users = User::all();
        $staffs = Staff::all();
        $techerCourses = Teacher_course::all();
        return view('addcoursetoteacher')->with('users',$users)->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $techerCourses = Teacher_course::all();
        foreach($techerCourses as $teachercourse){
            if($teachercourse->teacher_id == $request->input('id') && $teachercourse->course_id == $request->input('courses') && $teachercourse->course_date == $request->input('date')){
                return redirect ('/teacher_course')->with('success','This course is allready assigned to this Teacher and date before');
            }else{   
                $Teacher_course = new Teacher_course();
                $Teacher_course->teacher_id = $request->input('id');
                $Teacher_course->course_id  = $request->input('courses');
                $Teacher_course->course_date  = $request->input('date');
                $Teacher_course->save();
                return redirect('/teacher_course')->with('success','course Added to teacher successfully');

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student_course;
use App\User;
use Auth;
use DB;
use App\Teacher_course;
class Student_CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $Student_Courses = Student_course::all();
        $Teacher_courses = Teacher_course::all();
        return view('addgradetostudent')->with('courses',$courses)->with('Student_Courses',$Student_Courses);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $courses = Course::all();
        $Student_Courses = Student_course::all();
        return view('enrollcourses')->with('courses',$courses)->with('Student_Courses',$Student_Courses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            

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
        $enroll = new Student_course();
        $enroll->Student_id= Auth::user()->id;
        $enroll->course_id=$id;
        $enroll->save();
         return redirect('/Student_course/enrollcourses')->with('success','You enrolled in course successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Student_Courses= Student_course::find($id);
        DB::table('student_courses')->where('course_id', '=', $id)->delete();
        return redirect('/studentcourseslist')->with('success','Course was Deleted');
    }
    public function studentcourseslist()
    {
        $Student_Courses = Student_course::all();
        $courses= Course::all();
        return view('studentcourseslist')->with('Student_Courses',$Student_Courses)->with('courses',$courses);
    }
    public function showgrade()
    {
        $Student_courses = Student_course::all();
        return view('studentgrade')->with('Student_courses',$Student_courses);
    }
    public function addgrade(Request $request ,$id)
    {
         DB::table('student_courses')
              ->where([
                        ['Student_id', '=', $id],
                        ['course_id', '=', $request->input('course_id')],
                ])
              ->update(['grade' => $request->input('grade')]);
            
            
            return redirect('/Student_course/create')->with('success','grdae Added successfully');
    }
    
}

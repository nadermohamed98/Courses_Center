<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
        
    }
    public function viewallusers()
    {
        $users = User::all();
         return view('viewallusers')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            
            $user = new User();
            //        $user->imageopath = $request->input('imagepath');
            $user->name= $request->input('name');
            $user->email= $request->input('email');
            $user->password= bcrypt($request->input('password'));
            $user->DateOfBirth= $request->input('DateOfBirth');
            $user->address= $request->input('address');
            $user->phonenumber= $request->input('phonenumber');
            $user->role_id = $request->input('usertype');
            $user->save();
            return redirect('/users/show')->with('success','User Added successfully');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        return view('showallusers')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('editprofile')->with('user',$user);
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
        $user = User::find($id);
//        $user->imageopath = $request->input('imagepath');
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->password= bcrypt($request->input('password'));
        $user->DateOfBirth= $request->input('DateOfBirth');
        $user->address= $request->input('address');
        $user->phonenumber= $request->input('phonenumber');
        if ($user->role_id==1) {
            $user->role_id = '1';
        }
        elseif ($user->role_id==2) {
            $user->role_id = '2';
        }
        else {
            $user->role_id = '3';
        }
        
        $user->save();
        return redirect('/profile page')->with('success','User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users/show')->with('success','User Deleted');
    }

}

















<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
//            'imagepath' => 'image|nullable|max:1999'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        if($data->hasFile('imagepath')){
//            $filenameWithExt = 
//        }
        
        return User::create([
//            'imagepath' => $data['imagepath'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'DateOfBirth' => $data['DateOfBirth'],
            'address' => $data['address'],
            'phonenumber' => $data['phonenumber'],
            'role_id' => 3,
           // DB::insert('insert into users (name,email,password,DateOfBirth,address,phonenumber,role_id) values (?,?,?,?,?,?,?)', [$data['name'],$data['email'],$data['password'],$data['DateOfBirth'],$data['address'],$data['phonenumber'],3]),
        ]);


    }
}

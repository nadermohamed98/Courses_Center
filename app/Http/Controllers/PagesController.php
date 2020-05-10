<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view("home");
    }
    
    public function welcome(){
        return view("welcome");
    }
    
    public function web(){
        return view("Web");
    }
    public function programming(){
        return view("Programming");
    }
    public function languages(){
        return view("languages");
    }
    public function about(){
        return view("About");
    }
    public function contact(){
        return view("Contact");
    }
    public function profile(){
        return view("profile");
    }
}

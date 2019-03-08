<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Resume;
use Auth;
use Validator;
class AdminController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function adminView(){
        $resume=User::get(); 
        if(Auth::user()->role=="admin"){
            return view('/front/admin',compact('resume'));
        }
        else
        {
            return view('adminv');
        }
    } 

    public function showUserForm()
    {
        if(Auth::user()->role=="user"){
            return view('/form/front');
        } 
        else{
            return view('home');
        }
        
    }

    public function showLoginForm()
    {
        if(Auth::user()->role=="admin"){
            return view('/front/admin');
        } 
        else{
            return view('home');
        }
        
    }

   
}

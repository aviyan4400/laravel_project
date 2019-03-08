<?php

namespace App\Http\Controllers;
use App\Resume;
use Illuminate\Http\Request;
use Auth;

class ResumeController extends Controller
{
    
 	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function insertUsers( Request $request){
		$this->validate($request, [
            'name' => 'required|max:10',
            'email' => 'required|max:100',
            'password' => 'required|max:10',
        ]);

        Resume::create([
			'name'=>$request['name'],
			'email'=>$request['email'],
			'password'=>$request['password'],
			
		]);
        return view('front.login');
    }
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|max:100',
            'password' => 'required|max:10',
        ]);
   if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
   {
    return view('front');
   }
   else
   {
    return 'login error';
   }
    }

}

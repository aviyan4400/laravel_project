<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use PDF;
use storage;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
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
     public function userView4(){
            // 
            //$form=Form::paginate(3);
     	    $form=Form::get();
            return view('master.display4',compact('form'));
        }
     public function edit4($id){
             $form=Form::find($id);
             $form1=Form::get();
             return view('master.edit4',compact('form1','form'));//what get method variable is assigned that has to be compact with same variable.
        }
    public function insertForm( Request $request){
    	Form::create([
    		'name'=>$request['name'],
			'email'=>$request['email'],
			'phone'=>$request['phone'],
			'nationality'=>$request['nationality'],
			'address'=>$request['address'],
			'personal'=>$request['personal'],
			'skill'=>$request['skill'],
			'technical'=>$request['technical'],
			'wyear'=>$request['wyear'],
			'detail'=>$request['detail'],
			'eyear1'=>$request['eyear1'],
			'edetail1'=>$request['edetail1'],
			'eyear2'=>$request['eyear2'],
			'edetail2'=>$request['edetail2'],
			'interest'=>$request['interest'],

    	]);
    	return view('form.displaydetails');
   
}
 public function downloadPDF($id)
 {
   $form=Form::find($id);
   $count = DB::table('forms')->where('id', $id)->value('count');
   if($count<=5){
    $count++;
    $forms=Form::get();
    $pdf=PDF::loadView('master.AllDetails',compact('form','forms'));
    Form::where('id',$id)->update([
            'count'=>$count
        ]);
    return $pdf->download('AllDetails.pdf');
   }
   else{
    return redirect()->back()->withErrors(['Max download done']);
   }
   
 }
}

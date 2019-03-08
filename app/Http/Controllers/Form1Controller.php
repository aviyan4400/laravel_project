<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form1;
use PDF;
use Illuminate\Support\Facades\DB;

class Form1Controller extends Controller
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
     
    public function insertForm( Request $request){
    	Form1::create([
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
public function userView1(){
            // 
            //$form=Form::paginate(3);
            $form=Form1::get();
            return view('master.display1',compact('form'));
        }
     public function edit1($id){
             $form=Form1::find($id);
             $form1=Form1::get();
             return view('master.edit1',compact('form1','form'));//what get method variable is assigned that has to be compact with same variable.
        }
// public function delete(Request $request)
//  {
//     $form=Form1::where('id',$request->id)->delete();
//     return redirect()->back();
//  }
public function downloadPDF($id)
 {
   $form=Form1::find($id);
   $count = DB::table('form1s')->where('id', $id)->value('count');
   if($count<=5){
    $count++;
    $forms=Form1::get();
    $pdf=PDF::loadView('master.Form1details',compact('form','forms'));
    Form1::where('id',$id)->update([
            'count'=>$count
        ]);
    return $pdf->download('Form1details.pdf');
   }
   else{
    return redirect()->back()->withErrors(['Max download done']);
   }
   
 }
}

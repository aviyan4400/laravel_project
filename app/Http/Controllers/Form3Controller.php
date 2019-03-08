<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form3;
use Storage;
use PDF;
use Illuminate\Support\Facades\DB;

class Form3Controller extends Controller
{
    public function insertForm( Request $request){
    	Form3::create([
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
    	return view('form.form3');
    }
        public function userView3(){
            
            //$form=Form::paginate(3);
            $form=Form3::get();
            return view('master.display3',compact('form'));
        }
        public function edit3($id){
             $form=Form3::find($id);
             $form1=Form3::get();
             return view('master.edit3',compact('form1','form'));//what get method variable is assigned that has to be compact with same variable.
        }
  public function downloadPDF($id)
{

   $form=Form3::find($id);
   $count = DB::table('form3s')->where('id', $id)->value('count');
   if($count<=5)
   {
    $count++;
    $forms=Form3::get();
    $pdf=PDF::loadView('master.Form3details',compact('form','forms'));
    Form3::where('id',$id)->update([
            'count'=>$count
        ]);
    return $pdf->download('Form3details.pdf');
   }
   else{
    return redirect()->back()->withErrors(['Max download done']);
   }
   
 }

}

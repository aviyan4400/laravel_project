<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form2;
use Storage;
use PDF;
use Illuminate\Support\Facades\DB;

class Form2Controller extends Controller
{
    /*
    * Create a new controller instance.
    *
    * @return void
    */
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function insertForm( Request $request){
    	Form2::create([
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
    	return view('form.form2');
    }
    public function userView2(){
            
            //$form=Form::paginate(3);
            $form=Form2::get();
            return view('master.display2',compact('form'));
        }
     public function edit2($id){
             $form=Form2::find($id);
             $form1=Form2::get();
             return view('master.edit2',compact('form1','form'));//what get method variable is assigned that has to be compact with same variable.
        }
        
    public function downloadPDF($id)
    {
       $form=Form2::find($id);
       $count = DB::table('form2s')->where('id', $id)->value('count');
       if($count<=5){
            $count++;
            $forms=Form2::get();
            $pdf=PDF::loadView('master.Form2details',compact('form','forms'));
            Form2::where('id',$id)->update([
                'count'=>$count
        ]);
        return $pdf->download('Form2details.pdf');
        }
       else
       {
            return redirect()->back()->withErrors(['Max download done']);
        }
   
 }
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Five;
use PDF;
use Illuminate\Support\Facades\DB;
class FiveController extends Controller
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
     // public function editemp($id){
     //         $form=Form::find($id);
     //         return view('master.edit');//what get method variable is assigned that has to be compact with same variable.
     //    }
    public function userView5(){
            $five=Five::get();
            return view('master.display5',compact('five'));
        }
     public function edit5($id){
             $five=Five::find($id);
             $five1=Five::get();
             return view('master.edit5',compact('five1','five'));//what get method variable is assigned that has to be compact with same variable.
        }
    public function insertdetail( Request $request){
    	Five::create([
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
    	return view('form.form5');
   
}
 public function downloadPDF($id)
 {
   $five=Five::find($id);
   $count = DB::table('fives')->where('id', $id)->value('count');
   if($count<=5){
    $count++;
    $fives=Five::get();
    $pdf=PDF::loadView('master.Fivedetails',compact('five','fives'));
    Five::where('id',$id)->update([
            'count'=>$count
        ]);
    return $pdf->download('Fivedetails.pdf');
   }
   else{
    return redirect()->back()->withErrors(['Max download done']);
   }
   
 }
}

@extends('layouts.app')

@section('content') 
	<div class="container">
		
	
	<br>
	<br>
	  <a class="btn btn-info" href="{{ url('display1') }}">View form1</a>
	  <a class="btn btn-info" href="{{ url('display2') }}">View form2</a>
	  <a class="btn btn-info" href="{{ url('display3') }}">View form3</a>
	  <a class="btn btn-info" href="{{ url('display4') }}">View form4</a>
	  <a class="btn btn-info" href="{{ url('display5') }}">View form5</a>

	  <br>
	  <br>
	  <a class="btn btn-primary" href="{{ url('front') }}">Back</a>
                 

	</div>
@endsection
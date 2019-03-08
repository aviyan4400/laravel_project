@extends('layouts.app')

@section('content')  

<div class="form-inline">
  
    <div class="col-md-4 img-hover">
      <figure>
		<a href="{{ url('/display1') }}">
      	  <img class="img-responsive" src="https://i.imgur.com/eetKtqV.png" width="300" height="350">
    	</a>
        <figcaption><a href="{{ url('/display1') }}"><button class="btn btn-primary">Sample 1</button></a></figcaption>
      </figure>
    </div>  
    <div class="col-md-4 img-hover">
      <figure>
   		<a href="{{ url('/display2') }}">
    	    <img class="img-responsive" src="https://i.imgur.com/7wubRn4.png" width="300" height="350">
        </a>
        <figcaption><a href="{{ url('/display2') }}"><button class="btn btn-primary">Sample 2</button></a></figcaption>
      </figure>
    </div>    
    <div class="col-md-4 img-hover">
      <figure>
      	<a href="{{ url('/display3') }}">
    	    <img class="img-responsive" src="https://i.imgur.com/W5BlqSM.png" width="300" height="350">
        </a>
        <figcaption><a href="{{ url('/display3') }}"><button class="btn btn-primary">Sample 3</button></a></figcaption>
      </figure>
    </div>   
    <br><br>
    <div class="col-md-4 img-hover">
      <figure>
      	<a href="{{ url('display4') }}">
        	<img class="img-responsive" src="https://i.imgur.com/sL7gBvx.png" width="300" height="350">
        </a>
        <figcaption><a href="{{ url('display4') }}"><button class="btn btn-primary">Sample 4</button></a></figcaption>
      </figure>
    </div>  
    <div class="col-md-4 img-hover">
      <figure>
   		<a href="{{ url('/display5') }}">
        	<img class="img-responsive" src="https://i.imgur.com/Gw9ELLI.png" width="300" height="350">
        </a>
        <figcaption><a href="{{ url('/display5') }}"><button class="btn btn-primary">Sample 5</button></a></figcaption>
      </figure>
    </div> 
</div>
<div style="background-color:  ">
    <hr style="border: solid;">
        <div class="text-center center-block">
            <p class="txt-railway">- Follow Us -</p>
            <br />
              <a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
   
 </div>


 
@endsection
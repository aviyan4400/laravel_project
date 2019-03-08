<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Resume2</title>
	<style type="text/css">
		#div1{
			color: white;
			background-color: gray;
			margin-top: 30px;
			padding-left: 10px;

		}
		#div2{
			padding-left: 10px;
			margin-top: 30px;

		}
		#div3{
			color: white;
			background-color: gray;
			margin-top: 30px;
			padding-left: 10px;

		}

		.container{
			padding: 10px 80px;
			margin:auto;
			margin-bottom: 10px;
			background-color: #f5f5f5;
			border:solid #666;
			border-width: 8px 0 2px 0;
		}
	</style>
</head>
<body>
	<div class="container">
    <form class="form-horizontal" method="POST" action="{{ url('display2') }}">
                        {{ csrf_field() }}
    <!--  <input type="hidden" name="id" value="{{$form->id}}"> -->
	<input type="text" name="name" id="name" value="{{ $form->name }}" required placeholder="enter name" style="color:gray; font-size: 40px; border:none; background: transparent; margin-top: 30px;">
	<div id="div1">
		<h4> INFO</h4>
	</div>
     <div id="div2">
	
	<input type="email" size="50" name="email" id="email" value="{{ $form->email }}" required placeholder="enter email" style="border:none; background: transparent; font-size: 15px; padding-top:2px"><br><br>
	
	
	<input type="phone" name="phone" id="phone" placeholder="enter your phone number" style="border: none; background: transparent;" value="{{ $form->phone }}" required><br><br>
	
 	<input type="text" name="nationality" id="nationality"  placeholder="enter nationality" style="border: none; background: transparent;" value="{{ $form->nationality }}" required><br><br>

   <textarea rows="4" cols="123" placeholder="Enter your address" name="address" id="address"  style="border: none; background: transparent;" required>{{ $form->address }}</textarea><br><br>
   </div>

    <div id="div3">
		<h4> PERSONAL SUMMARY</h4>
	</div>
		<textarea rows="4" cols="123" type="text" name="personal" id="personal" placeholder="enter about yourself" style="border:none; background: transparent;"required>{{ $form->personal }}</textarea>

    <div id="div3">
		<h4> SKILLS</h4>
	 </div>
		<textarea rows="4" cols="123" type="text" name="skill" id="skill" placeholder="Skill Details" style="border:none; background: transparent;"  required>{{ $form->skill }}</textarea>

	<div id="div3">
		<h4> TECHNICAL DETAILS</h4>
	</div>
		<textarea rows="4" cols="123" type="text" name="technical" id="technical" placeholder="enter technical Details" style="border:none; background: transparent;"  required>{{ $form->technical }}</textarea>
        
    <div id="div3">
		<h4> EXPERIENCS</h4>
	</div>
		<input type="year" name="wyear" id="wyear" placeholder="work date" style="border:none; background: transparent;" value="{{ $form->wyear }}" required>
		<textarea rows="4" cols="123" type="text" name="detail" id="wdetail" placeholder="work Details" style="border:none; background: transparent;" required>{{ $form->detail }}</textarea>

	   
    <div id="div3">
	<h4> EDUCATION</h4>
    </div>
	 <table>
	     <tr>
		     <td> 
		     	<label>
		     	<input type="year" name="eyear1" id="eyear1" placeholder="enter enrollment date" style="border:none; background: transparent;" value="{{ $form->eyear1}}" required>
			 </label>
			 </td>
				
				<td>
				<textarea rows="2" cols="160" type="text" name="edetail1" id="edetail1" placeholder="Education details"  style="background: transparent; border:none;"  required>{{ $form->edetail1 }}</textarea>
			</td>
		 </tr>
         <tr>
	        <td> <label>
	        	<input type="year" name="eyear2" id="eyear2" placeholder="enter enrollment date" style="border:none; background: transparent;" value="{{ $form->eyear2}}" required>
			</label>
			</td>
			
			<td>
				<textarea rows="2" cols="160" type="text" name="edetail2" id="edetail2" placeholder="Education details"  style="background: transparent; border:none;"  required>{{ $form->edetail2 }}</textarea>
			</td>
		</tr>


	</table>

	<div id="div3">
		 <h4> HOBBIES</h4>
    </div>
		
	      <textarea rows="2" cols="160" type="text" name="interest" id="interest" placeholder="Enter hobies"  style="background: transparent; border:none;"  required>{{ $form->interest}}</textarea>

	     
					
		  
			    
			
		</form>
     </div><a class="btn btn-info" href="{{ url('display2') }}">Back</a>
</body>
</html>

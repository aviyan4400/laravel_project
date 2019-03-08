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
			margin-top: 10px;
			padding-left: 5px;

		}

/*		.container{
			padding: 10px 80px;
			margin:auto;
			margin-bottom: 10px;
			background-color: #f5f5f5;
			border:solid #666;
			border-width: 8px 0 2px 0;
		}*/
	</style>
</head>
<body>
	<div class="container">
	<form method="POST">	


			<input type="text" name="name" placeholder="enter name" id="name" class="form-control" value="{{ $form->name}}" required style="color:gray; font-size: 40px; border:none; background: transparent; margin-top: 30px;">
			<div id="div1">
				<h4> INFO</h4>
			</div>
		     <div id="div2">
			
			<input type="text" size="50" name="email" placeholder="enter email" class="form-control"  id="email" value="{{ $form->email }}" required style="border:none; background: transparent; font-size: 15px; padding-top:2px">
			
			
			<input type="text" name="phone" placeholder="enter your phone number" class="form-control"  id="phone" value="{{ $form->phone }}" required style="border: none; background: transparent;">
			
		 	<input type="text" name="nationality"  placeholder="enter nationality" class="form-control"  id="nationality" value="{{ $form->nationality }}" required style="border: none; background: transparent;">

		   <textarea rows="4" cols="123" placeholder="Enter your address" name="address" class="form-control"  id="address"  required style="border: none; background: transparent;"> {{$form->address}}</textarea>
		   </div>

		    <div id="div3">
				<h4> PERSONAL SUMMARY</h4>
			</div>
				<textarea rows="4" cols="123" type="text" name="personal" class="form-control"  id="personal" value="{{ old('personal') }}" required placeholder="enter about yourself" style="border:none; background: transparent;"> {{$form->personal}}</textarea>

		    <div id="div3">
				<h4> SKILLS</h4>
			 </div>
				<textarea rows="4" cols="123" type="text" name="skill" class="form-control"  id="skill" value="{{ old('skill') }}" required placeholder="Skill Details" style="border:none; background: transparent;"> {{$form->skill}}</textarea>

			<div id="div3">
				<h4> TECHNICAL DETAILS</h4>
			</div>
				<textarea rows="4" cols="123" type="text" name="technical" class="form-control"  id="technical" value="{{ old('technical') }}" required placeholder="enter technical Details" style="border:none; background: transparent;"> {{$form->technical}}</textarea>
		        
		    <div id="div3">
				<h4> EXPERIENCES</h4>
			</div>
				<input type="text" name="wyear" placeholder="work date" id="wyear" class="form-control"  value="{{ $form->wyear }}" required style="border:none; background: transparent;">
				<textarea rows="4" cols="123" type="text" name="detail" class="form-control"  id="wdetail" value="{{ old('wdetail') }}" required placeholder="work Details" style="border:none; background: transparent;"> {{$form->detail}}</textarea>

			   
		    <div id="div3">
			<h4> EDUCATION</h4>
		    </div>
			 <table>
			    <tr>
				    <td> 
				     	<input type="text" name="eyear1" id="eyear1" value="{{ $form->eyear1}}" required placeholder="enter enrollment date" class="form-control"  style="border:none; background: transparent;">
					</td>
						<td>
						<textarea rows="2" cols="160" type="text" id="edetail1" value="{{ old('edetail1') }}" required name="edetail1" class="form-control"  placeholder="Education details"  style="background: transparent; border:none;"> {{$form->edetail1}}</textarea>
					</td>
				</tr>
		        <tr>
			        <td> 
			        	<input type="text" name="eyear2" id="eyear2" class="form-control"  value="{{ $form->eyear2 }}" required placeholder="enter enrollment date" style="border:none; background: transparent;">
					
					</td>
					<td>
						<textarea rows="2" cols="160" type="text" name="edetail2" class="form-control"  id="edetail2" value="{{ old('edetail2') }}" required placeholder="Education details"  style="background: transparent; border:none;"> {{$form->edetail2}}</textarea>
					</td>
				</tr>
			</table>

			<div id="div3">
				 <h4> HOBBIES</h4>
		    </div>
				
			      <textarea rows="2" cols="160" type="text" name="interest" class="form-control"  id="interest" value="{{ old('interest') }}" required placeholder="Enter hobies"  style="background: transparent; border:none;"> {{$form->interest}}</textarea>

		</form>	
		</div>      		
</body>
</html>
